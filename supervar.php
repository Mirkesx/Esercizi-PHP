<?php
    abstract class Madre {
        public function prova() {
            echo "Hello World";
        }
    }

    class figlio extends Madre {
        public function prova() {
            parent::prova();
            echo "Sono ribello Hello World";
        }
    }

    $f = new figlio();

    $f->prova();
?>