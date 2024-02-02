<?php

// //Q1: Single and Double Quoted strings

// $language = 'PHP';
// echo 'Single quoted strings do not allow for interpolation of variables automatically. It treats variables literaly and does not display their values.' ."\t". 
// 'It also allows for more escapes such as  \n or \t' ."\n".
// 'Single Quoted strings for variable and string:
//     '. "\t".'$language = `PHP`' ."\n" .'The language is $language';
// echo 'To interpolate a varialble, concatenate with the string and the variable with ` . ` ';

// echo 'The language is' . $language;

// echo "Double quoted strings do allow for interpolation of variables automatically.";
// echo "The language is $language";


// //Q2: Obect Oriented Programming

// echo '

// class Test {
//     private $id;
//     private $question;
//     private $associatedAnswer;

//     public function __construct($id, $question) {
//         $this->id = $id;
//         $this->question = $question;
//     }
    
//     public function getTestID() {
//         return $this->id;
//     }

//     public function getQuestion() {
//         return $this->question;
//     }

//     public function associateAnswer(Answer $answer) {
//         $this->associatedAnswer = $answer;
//     }

//     public function getAssociatedAnswer() {
//         return $this->associatedAnswer;
//     }

//     public function __toString() {
//         return "Test ID: {$this->id}, Question: {$this->question}";
//     }

// }

// class Answer {
//     private $answerID;
//     private $answer;

//     public function __construct($answerID, $answer) {
//         $this->answerID = $answerID;
//         $this->answer = $answer;
//     }

//     public function getAnswerID() {
//         return $this->answerID;
//     }

//     public function getAnswer() {
//         return $this->answer;
//     }

//     public function __toString() {
//         return "Answer ID: {$this->answerID}, Answer Text: {$this->answer}";
//     }
// }



// // Create instances of Question and Answer
// $test = new Test(1, "What is the capital of France?");
// $answer = new Answer(1, "The capital of France is Paris.");


// echo "$test";
// echo "$answer";
// // Associate the Test with the Question
// $test->associateAnswer($answer);

// // Get the associated Test from the Question
// $associatedAnswer = $test->getAssociatedAnswer();

// ';


// class Test {
//     private $id;
//     private $question;
//     private $associatedAnswer;

//     public function __construct($id, $question) {
//         $this->id = $id;
//         $this->question = $question;
//     }
    
//     public function getTestID() {
//         return $this->id;
//     }

//     public function getQuestion() {
//         return $this->question;
//     }

//     public function associateAnswer(Answer $answer) {
//         $this->associatedAnswer = $answer;
//     }

//     public function getAssociatedAnswer() {
//         return $this->associatedAnswer;
//     }

//     public function __toString() {
//         return "Test ID: {$this->id}, Question: {$this->question}";
//     }

// }

// class Answer {
//     private $answerID;
//     private $answer;

//     public function __construct($answerID, $answer) {
//         $this->answerID = $answerID;
//         $this->answer = $answer;
//     }

//     public function getAnswerID() {
//         return $this->answerID;
//     }

//     public function getAnswer() {
//         return $this->answer;
//     }

//     public function __toString() {
//         return "Answer ID: {$this->answerID}, Answer Text: {$this->answer}";
//     }
// }


// // Create instances of Question and Answer
// $test = new Test(1, "What is the capital of France?");
// $answer = new Answer(1, "The capital of France is Paris.");


// echo "$test";
// echo "$answer";
// // Associate the Answer with the Question
// $test->associateAnswer($answer);

// // Get the associated Answer from the Question
// $associatedAnswer = $test->getAssociatedAnswer();



// class TechnicalTest {
//     protected $id;
//     protected $text;

//     public function __construct($id, $text) {
//         $this->id = $id;
//         $this->text = $text;
//     }

//     public function getId() {
//         return $this->id;
//     }

//     public function getText() {
//         return $this->text;
//     }

//     public function __toString() {
//         return "ID: {$this->id}, Text: {$this->text}";
//     }
// }

// class TestQuestion extends TechnicalTest {
//     protected $associatedAnswer;

//     public function __construct($id, $text) {
//         parent::__construct($id, $text);
//         $this->associatedAnswer = null;
//     }

//     public function associateAnswer(TestAnswer $answer) {
//         $this->associatedAnswer = $answer;
//     }

//     public function getAssociatedAnswer() {
//         return $this->associatedAnswer;
//     }

//     public function __toString() {
//         $result = "Test " . parent::__toString();
//         if ($this->associatedAnswer) {
//             $result .= "\nAssociated Answer: " . $this->associatedAnswer;
//         }
//         return $result;
//     }
// }

// class TestAnswer extends TechnicalTest {
//     public function __toString() {
//         return "Answer " . parent::__toString();
//     }
// }

// $testQuestion = new TestQuestion(1, "What is another popular PHP Framework?");
// $testAnswer = new TestAnswer(1, "Symphony is another popular PHP Framework");

// // Associate the answer with the question
// $testQuestion->associateAnswer($testAnswer);

// // Display the question and associated answer
// echo 'FSDAFEUYHUEKDNFEKSDFAMKD' .$testQuestion;

// echo '

// INHERITANCE

// class TechnicalTest {
//     protected $id;
//     protected $text;

//     public function __construct($id, $text) {
//         $this->id = $id;
//         $this->text = $text;
//     }

//     public function getId() {
//         return $this->id;
//     }

//     public function getText() {
//         return $this->text;
//     }

//     public function __toString() {
//         return "ID: {$this->id}, Text: {$this->text}";
//     }
// }

// class TestQuestion extends TechnicalTest {
//     protected $associatedAnswer;

//     public function __construct($id, $text) {
//         parent::__construct($id, $text);
//         $this->associatedAnswer = null;
//     }

//     public function associateAnswer(TestAnswer $answer) {
//         $this->associatedAnswer = $answer;
//     }

//     public function getAssociatedAnswer() {
//         return $this->associatedAnswer;
//     }

//     public function __toString() {
//         $result = "Test " . parent::__toString();
//         if ($this->associatedAnswer) {
//             $result .= "\nAssociated Answer: " . $this->associatedAnswer;
//         }
//         return $result;
//     }
// }

// class TestAnswer extends TechnicalTest {
//     public function __toString() {
//         return "Answer " . parent::__toString();
//     }
// }

// $testQuestion = new TestQuestion(1, "What is another popular PHP Framework?");
// $testAnswer = new TestAnswer(1, "Symphony is another popular PHP Framework");

// // Associate the answer with the question
// $testQuestion->associateAnswer($testAnswer);

// // Display the question and associated answer
// echo $testQuestion;

// ';



//Q3: Error Handling

// echo '
//    <?php
//     // $dataSourceName = mysql:host=HOST;dbname=DB;
//     // $username = username;
//     //$password = password

//     //Test code with wrong $dataSourceName and wrong $username

//     $dataSourceName = mysql:host=127.0.0.1;dbname=php;
//     $username = superuser;

//     try {
//         $db = new PDO($dataSourceName, $username);
//     } catch (PDOException $e) {
//         $error = "Database Error:";
//         $error .= $e->getMessage();

//         //Using Logs
//         // $errorLog = `logs.txt`;
//         // $error = "Database Error: " . $e->getMessage() . PHP_EOL;
//         // file_put_contents($errorLog, $error, FILE_APPEND);
//         // header("HTTP/1.1 500 Internal Server Error");
//         // echo "Internal Server Error";

//         //Using error view
//         include(`view/error.php`);
//         exit();
//     }';

// Q4: Differences between PDO and MySQLi

// echo '

// <?php
//     //Using PDO

//     // $dataSourceName = `mysql:host=localhost;dbname=phptest`;
//     //Test code with wrong $dataSourceName and wrong $username

//     // $dataSourceName = `mysql:host=127.0.0.1;dbname=php`;
//     // $username = `superuser`;

//     // try {
//     //     $db = new PDO($dataSourceName, $username);
//     // } catch (PDOException $e) {
//     //     $error = "Database Error:";
//     //     $error .= $e->getMessage();
        
//     //     //Using Logs
//     //     // $errorLog = `logs.txt`;
//     //     // $error = "Database Error: " . $e->getMessage() . PHP_EOL;
//     //     // file_put_contents($errorLog, $error, FILE_APPEND);
//     //     // header("HTTP/1.1 500 Internal Server Error");
//     //     // echo "Internal Server Error";

//     //     //Using error view
//     //     include(`view/error.php`);
//     //     exit();
//     // }

//     //Usig MySQLi
//     $username = `username`;
//     $password = `password`;
//     $host = `host`;
//     $dbName = `database`;

//     try {
//         $db = new mysqli($host, $username, $password, $dbName);
//         if ($db->connect_error) {
//             throw new Exception("Database Error: " . $db->connect_error);
//         }
//     } catch (Exception $e) {
//         $error = $e->getMessage();
        
//         //Using Logs
//         // $errorLog = `logs.txt`;
//         // $error = "Database Error: " . $e->getMessage() . PHP_EOL;
//         // file_put_contents($errorLog, $error, FILE_APPEND);
//         // header("HTTP/1.1 500 Internal Server Error");
//         // echo "Internal Server Error";

//         //Using error view
//         include(`view/error.php`);
//         exit();
//     }
            

// ';

// echo 'function getAllTests() {
//     global $db;
//     //PDO
//     // $query = `SELECT ID, question
//     //           FROM tests
//     //           ORDER BY ID`;

//     // $statement = $db->prepare($query);
//     // $statement->execute();
//     // $tests = $statement->fetchAll(PDO::FETCH_ASSOC);
//     // $statement->closeCursor();
//     // return $tests;

//     //MySQLi
//     $query = `SELECT ID, question
//       FROM tests
//       ORDER BY ID`;
      
//     $statement = $db->prepare($query);
//     $statement->execute();
//     $result = $statement->get_result();

//     $tests = array();while ($row = $result->fetch_assoc()) {
//         $tests[] = $row;
//     }
//     $statement->close();
//     return $tests;
// }';





// function sumOfEvenNumbers($numbers) {
//     $sum = 0;

//     foreach ($numbers as $number) {
//         if ($number % 2 === 0) {
//             $sum += $number;
//         }
//     }

//     return $sum;
// }

// $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// $result = sumOfEvenNumbers($numbers);

// echo "Sum of even numbers: $result";


// function countWordsInFile($filename) {
//     try {
//         // Open the file
//         $file = fopen($filename, 'r');

//         if ($file === false) {
//             throw new Exception("Error opening file.");
//         }

//         // Read the content
//         $content = fread($file, filesize($filename));

//         if ($content === false) {
//             throw new Exception("Error reading file content.");
//         }

//         // Count the words
//         $wordCount = str_word_count($content);

//         // Close the file
//         fclose($file);

//         return $wordCount;
//     } catch (Exception $e) {
//         return "Error: " . $e->getMessage();
//     }
// }

// // Example usage:
// $filename = 'logs.txt';
// $result = countWordsInFile($filename);

// if (is_numeric($result)) {
//     echo "Number of words in $filename: $result";
// } else {
//     echo $result;
// }



// // API endpoint for retrieving users
// $apiUrl = 'https://jsonplaceholder.typicode.com/users';

// // Create a stream context with SSL options to ignore verification
// $context = stream_context_create([
//     'ssl' => [
//         'verify_peer' => false,
//         'verify_peer_name' => false,
//     ],
// ]);

// // Make a GET request to the API with the created context
// $response = file_get_contents($apiUrl, false, $context);

// // Check if the request was successful
// if ($response === false) {
//     die('Error fetching data from the API.');
// }

// // Parse the JSON response
// $users = json_decode($response, true);

// // Check if JSON decoding was successful
// if ($users === null) {
//     die('Error decoding JSON response.');
// }

// // Display user names and email addresses
// foreach ($users as $user) {
//     echo "Name: {$user['name']}, Email: {$user['email']}" . PHP_EOL;
// }


// Sample large data structure (you can replace it with your actual data)
// $largeData = [
//     'name' => 'John Doe',
//     'age' => 30,
//     'city' => 'Example City',
// ];



$apiUrl = 'https://jsonplaceholder.typicode.com/users';

// Create a stream context with SSL options to ignore verification
$context = stream_context_create([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
    ],
]);

// Make a GET request to the API with the created context
$largeData = file_get_contents($apiUrl, false, $context);

// Check if the request was successful
if ($largeData === false) {
    die('Error fetching data from the API.');
}

// Step 1: Serialize the data
$serializedData = serialize($largeData);

// Step 2: Compress the serialized data using gzcompress
$compressedData = zlib_encode($serializedData, ZLIB_ENCODING_DEFLATE);

// Step 3: Save the compressed data to a file
$filePath = 'compressed_data.txt';
if (file_put_contents($filePath, $compressedData, FILE_APPEND) === false) {
    die("Error writing to file: $filePath");
} 
file_put_contents($filePath, $compressedData, FILE_APPEND);

echo "Data serialized, compressed, and saved to '{$filePath}'.\n";

// Step 4: Read the compressed data from the file
$readCompressedData = file_get_contents($filePath);

// Step 5: Decompress the data using gzuncompress
$decompressedData = zlib_decode($readCompressedData);

// Step 6: Unserialize the decompressed data
$unserializedData = unserialize($decompressedData);
// print_r($unserializedData);

// Optionally, you can unlink the file after use
// unlink($filePath);

echo "Data successfully unserialized and decompressed.\n";



// $apiUrl = 'https://jsonplaceholder.typicode.com/users';

// // Create a stream context with SSL options to ignore verification
// $context = stream_context_create([
//     'ssl' => [
//         'verify_peer' => false,
//         'verify_peer_name' => false,
//     ],
// ]);

// // Make a GET request to the API with the created context
// $response = file_get_contents($apiUrl, false, $context);

// // Check if the request was successful
// if ($response === false) {
//     die('Error fetching data from the API.');
// }

// // Parse the JSON response
// $users = json_decode($response, true);

// // Check if JSON decoding was successful
// if ($users === null) {
//     die('Error decoding JSON response.');
// }

// // Display user names and email addresses
// foreach ($users as $user) {
//     echo "Name: {$user['name']}, Email: {$user['email']}" . PHP_EOL;
// }






// Abstraction:

// Definition: Abstraction is the process of simplifying complex systems by modeling classes based on essential properties and behavior, while hiding unnecessary details.
// In PHP: You can create abstract classes and methods using the abstract keyword. Abstract classes cannot be instantiated, and they may have abstract methods that must be implemented by concrete subclasses.
// Interfaces:

// Definition: Interfaces define a contract of methods that a class must implement. They provide a way to achieve multiple inheritance and enable polymorphism.
// In PHP: You can declare interfaces using the interface keyword. A class can implement multiple interfaces, and by doing so, it must provide implementations for all methods declared in those interfaces.
// Class and Object:

// Definition: A class is a blueprint or template for creating objects. An object is an instance of a class and represents a real-world entity.
// In PHP: Classes are defined using the class keyword, and objects are created using the new keyword.
// Constructor and Destructor:

// Definition: A constructor is a special method in a class that is called when an object is instantiated. A destructor is a method that is called when an object is destroyed or goes out of scope.
// In PHP: The constructor is named __construct, and the destructor is named __destruct. Constructors are automatically called when an object is created.