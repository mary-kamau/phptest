<?php 
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline';");
include('view/header.php');
?>

<section id="tests" class="tests">
    <?php foreach ($tests as $test) : ?>
        <div class="card">
            <h3><?= $test['question'] ?></h3>
            <?php if (isset($test['answer_id']) && $test['answer_id']) : ?>
                <p>Answer: <?= $test_answer['answer'] ?></p>
            <?php else : ?>
                <form action="." method="post" class="add-answer-form">
                    <input type="hidden" name="action" value="add_answer">
                    <input type="hidden" name="test_id" value="<?= $test['ID'] ?>">
                    <label>Your Answer:</label>
                    <input type="text" name="answer" maxlength="1000" placeholder="Enter your answer" required>
                    <button class="add-button bold">Add Answer</button>
                </form>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</section>

<section id="add" class="add">
    <h2>Add Test</h2>
    <form action="." method="post" id="add__form" class="add__form">
        <input type="hidden" name="action" value="add_test">
        <div class="add__inputs">
            <label>Question:</label>
            <input type="text" name="question" maxlength="1000" placeholder="Question" required>
        </div>
        <div class="add__addItem">
            <button class="add-button bold">Add</button>
        </div>
    </form>
</section>
<br>
<?php include('view/footer.php') ?>