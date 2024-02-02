<?php
    function getTestAndAnswer($testID) {
        // /Using PDO
        global $db;
        $query = 'SELECT T.ID AS test_ID, T.question, A.answer
                  FROM tests T
                  LEFT JOIN answers A ON T.answerID = A.answerID
                  WHERE T.ID = :test_id';

        $statement = $db->prepare($query);
        $statement->bindValue(':test_id', $testID);
        $statement->execute();
        $test = $statement->fetchAll();
        $statement->closeCursor();
        // global $db;
        // $query = 'SELECT T.ID AS test_ID, T.question, A.answer
        //           FROM tests T
        //           LEFT JOIN answers A ON T.answerID = A.answerID
        //           WHERE T.ID = ?';
    
        // $statement = $db->prepare($query);
        // $statement->bind_param('i', $testID);
        // $statement->execute();
        // $result = $statement->get_result();
        // $test = $result->fetch_assoc();
        // $statement->close();
        return $test;   
    }
        

    function getAllTestsAndAnswers() {
        global $db;
        // $query = 'SELECT T.ID AS test_ID, T.question, A.answer
        //           FROM tests T
        //           LEFT JOIN answers A ON T.answer_id = A.answer_id
        //           ORDER BY T.ID';
        $query = 'SELECT T.ID AS test_ID, T.question, A.answer
                  FROM tests T
                  LEFT JOIN answers A ON T.answerID = A.answerID
                  ORDER BY T.ID';
    
        $statement = $db->query($query);
        $testsAndAnswers = $statement->fetchAll();
        $statement->closeCursor();
        return $testsAndAnswers;
    }

    function getTest($testID) {
        global $db;
        $query = 'SELECT ID, question
                  FROM tests
                  WHERE ID = :test_id';

        $statement = $db->prepare($query);
        $statement->bindValue(':test_id', $testID);
        $statement->execute();
        $test = $statement->fetchAll();
        $statement->closeCursor();
        return $test;
    }

    function getAllTests() {
        global $db;
        //PDO
        $query = 'SELECT ID, question
                  FROM tests
                  ORDER BY ID';

        $statement = $db->prepare($query);
        $statement->execute();
        $tests = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        return $tests;

        //MySQLi
        // $query = 'SELECT ID, question
        //   FROM tests
        //   ORDER BY ID';
          
        // $statement = $db->prepare($query);
        // $statement->execute();
        // $result = $statement->get_result();

        // $tests = array();while ($row = $result->fetch_assoc()) {
        //     $tests[] = $row;
        // }
        // $statement->close();
        // return $tests;
    }

    function addTest($question) {
        global $db;
        $query = 'INSERT INTO tests (Question) VALUES (:question)';

        $statement = $db->prepare($query);
        $statement->bindValue(':question', $question);
        $statement->execute();
        $testID = $db->lastInsertId();
        $statement->closeCursor();
        return $testID;
    }

    function updateTest($testID, $question, $answerID) {
        global $db;
        $query = 'UPDATE tests SET question = :question, answer_id = :answer_id WHERE ID = :test_id';

        $statement = $db->prepare($query);
        $statement->bindValue(':question', $question);
        $statement->bindValue(':answer_id', $answerID);
        $statement->bindValue(':test_id', $testID);
        $statement->execute();
        $statement->closeCursor();
    }

    function deleteTest($testID, $db) {
        $query = 'DELETE FROM tests WHERE ID = :test_id';

        $statement = $db->prepare($query);
        $statement->bindValue(':test_id', $testID);
        $statement->execute();
        $statement->closeCursor();
    }