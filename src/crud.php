<?php
// Create 
function createTask($task) {
    global $collection;
    $insertOneResult = $collection->insertOne($task);
    return $insertOneResult->getInsertedId();
}
?>

<?php
// Read
function getTasks() {
    global $collection;
    $cursor = $collection->find();
    return iterator_to_array($cursor);
}
?>

<?php
// Update
function updateTask($taskId, $update) {
    global $collection;
    $updateResult = $collection->updateOne(
        ['_id' => new MongoDB\BSON\ObjectId($taskId)],
        ['$set' => $update]
    );
    return $updateResult->getModifiedCount();
}
?>

<?php
// Delete
function deleteTask($taskId) {
    global $collection;
    $deleteResult = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($taskId)]);
    return $deleteResult->getDeletedCount();
}
?>
