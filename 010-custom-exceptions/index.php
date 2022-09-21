<?php

class MichiException extends Exception {
    public function getMeow() {
        return "Meow 🙀";
    }
}

class ConejiException extends Exception {
    public function getRabbit() {
        return "🐰";
    }
}


try {
    $exception = readline("Excepcion a lanzar: ");

    if ($exception == "michi")
        throw new MichiException("Michi incorrecto");
    else
        throw new ConejiException("Conejo incorrecto");

} catch (MichiException $e) {
    echo $e->getMessage();
    echo "<br>";
    echo "<br>";
    echo $e->getMeow();
} catch (ConejiException $e) {
    echo $e->getMessage();
    echo "<br>";
    echo "<br>";
    echo $e->getRabbit();
} finally {
    echo "Te perdono";
}