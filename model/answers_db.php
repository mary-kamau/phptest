<?php
    function getAnswerAndTest($answerID) {
        global $db;
        $query = 'SELECT A.answer_ID, A.answer, T.ID AS test_ID, T.question
                  FROM answers A
                  LEFT JOIN tests T ON A.answer_ID = T.answer_id
                  WHERE A.answer_ID = :answer_id';

        $statement = $db->prepare($query);
        $statement->bindValue(':answer_id', $answerID);
        $statement->execute();
        $answerAndTest = $statement->fetchAll();
        $statement->closeCursor();
        return $answerAndTest;
    }

    function getAnswer($answerID) {
        global $db;
        $query = 'SELECT *
                  FROM answers
                  WHERE answer_ID = :answer_id';

        $statement = $db->prepare($query);
        $statement->bindValue(':answer_id', $answerID);
        $statement->execute();
        $answer = $statement->fetch();
        $statement->closeCursor();
        return $answer;
    }

    function getAllAnswers() {
        global $db;
        $query = 'SELECT *
                  FROM answers
                  ORDER BY answer_ID';

        $statement = $db->prepare($query);
        $statement->execute();
        $answers = $statement->fetchAll();
        $statement->closeCursor();
        return $answers;
    }

    function addAnswerToTest($answer, $testID) {
        global $db;
        $db->beginTransaction();

        try {
            // Add the answer
            $queryAddAnswer = 'INSERT INTO answers (answer) VALUES (:answer)';
            $statementAddAnswer = $db->prepare($queryAddAnswer);
            $statementAddAnswer->bindValue(':answer', $answer);
            $statementAddAnswer->execute();

            $answerID = $db->lastInsertId();

            // Update the test with the answer_id
            $queryUpdateTest = 'UPDATE tests SET answer_id = :answer_id WHERE ID = :test_id';
            $statementUpdateTest = $db->prepare($queryUpdateTest);
            $statementUpdateTest->bindValue(':answer_id', $answerID);
            $statementUpdateTest->bindValue(':test_id', $testID);
            $statementUpdateTest->execute();

            $db->commit();
            return $answerID;
        } catch (PDOException $e) {
            $this->pdo->rollBack();
            throw $e;
        }
    }

    function updateAnswer($answerID, $answer) {
        global $db;
        $query = 'UPDATE answers SET answer = :answer WHERE answer_ID = :answer_id';

        $statement = $db->prepare($query);
        $statement->bindValue(':answer', $answer);
        $statement->bindValue(':answer_id', $answerID);
        $statement->execute();
        $statement->closeCursor();
    }

    function deleteAnswer($answerID) {
        global $db;
        $query = 'DELETE FROM answers WHERE answer_ID = :answer_id';

        $statement = $db->prepare($query);
        $statement->bindValue(':answer_id', $answerID);
        $statement->execute();
        $statement->closeCursor();
    }
?>