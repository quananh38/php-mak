<?php
$tasks = range(1, 5);

foreach ($tasks as $task) {
    $pid = pcntl_fork();
    if ($pid == -1) {
        die("Не удалось создать процесс");
    } elseif ($pid === 0) {
        // Дочерний процесс
        echo "Процесс #$task начал выполнение\n";
        sleep(rand(1, 3)); // Имитация работы
        echo "Процесс #$task завершил выполнение\n";
        exit(0);
    } else {
        // Родительский процесс
        pcntl_wait($status); // Ждем завершения дочернего процесса
    }
}
?>
