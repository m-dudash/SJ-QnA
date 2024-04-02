<?php
// qna_functions.ph
function getQuestionsAndAnswers($db_connection) {
    $query = "SELECT question, answer FROM qna_table";
    $result = mysqli_query($db_connection, $query);

    $qna_data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $qna_data[] = $row;
    }

    mysqli_free_result($result);

    return $qna_data;
}
?>
