<?php
    require('model/database.php');
    require('model/tests_db.php');
    require('model/answers_db.php');

    $answer_id = filter_input(INPUT_POST, 'answer_id', FILTER_VALIDATE_INT);
    if(!$answer_id) {
        $answer_id = filter_input(INPUT_GET, 'answer_id', FILTER_VALIDATE_INT);
    }
    $answer= filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_STRING);
    $question = filter_input(INPUT_POST, 'question', FILTER_SANITIZE_STRING);

    $test_id = filter_input(INPUT_POST, 'test_id', FILTER_VALIDATE_INT);
    if(!$test_id) {
        $test_id = filter_input(INPUT_GET, 'test_id', FILTER_VALIDATE_INT);
    }
    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if(!$action) {
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
        if (!$action){
            $action = 'List Questions and Answers';
        }
    }

    
    switch($action) {
        case 'Get Test and Answer':
            getTestAndAnswer($test_id);
            break;
    
        case 'Get Test':
            getTest($testID);
            break;
    
        case 'List All Tests':
            getAllTestsAndAnswers();
            break;
    
        case 'Add Test':
            $newTestID = addTest($question);
            break;
    
        case 'Update Test':
            updateTest($testID, $question, $answerID);
            break;
    
        case 'Delete Test':
            // deleteTest($testID);
            break;
        default:
            // $answeredTests = getAllTestsAndAnswers();
            $tests = getAllTests();
            if (isset($_POST['question'])) {
                $test = addTest($question);
            }
            if (isset($_GET)) {
                $test_answer = getTestAndAnswer($test_id);
            }
            if (isset($_POST['question'])) {
                $test = addTest($question);
            }
            if (isset($_POST['answer'])) {
                $test = addAnswerToTest($test_id, $answer);
            }
            
            include('view/tests.php');
            break;
    }



    // switch($action) {
    //     case "list_courses": 
    //         $courses = get_courses();
    //         include('view/course_list.php');
    //         break;
    //     case "add_course":
    //         add_course($course_name);
    //         header("Location: .?action=list_courses");
    //         break;
    //     case "add_assignment":
    //         if ($course_id && $description) {
    //             add_assignment($course_id, $description);
    //             header("Location: .?course_id=$course_id");
    //         } else {
    //             $error = "Invalid assignment data. Check all fields and try again.";
    //             include('view/error.php');
    //             exit();
    //         }
    //         break;
    //     case "delete_course":
    //         if ($course_id) {
    //             try {
    //                 delete_course($course_id);
    //             } catch (PDOException $e) {
    //                 $error = "You cannot delete a course if assignments exist for it.";
    //                 include('view/error.php');
    //                 exit();
    //             }
    //             header("Location: .?action=list_courses");
    //         }
    //         break;
    //     case "delete_assignment":
    //         if ($assignment_id) {
    //             delete_assignment($assignment_id);
    //             header("Location: .?course_id=$course_id");
    //         } else {
    //             $error = "Missing or incorrect assignment id.";
    //             include('view/error.php');
    //         }
    //         break;
    //     default:
    //         $course_name = get_course_name($course_id);
    //         $courses = get_courses();
    //         $assignments = get_assignments_by_course($course_id);
    //         include('view/assignment_list.php');
    // }

    
?>