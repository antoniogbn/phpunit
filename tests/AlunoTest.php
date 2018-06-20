<?php


require_once '../src/Aluno.php';

use PHPUnit\Framework\TestCase;

final class AlunoTest extends TestCase{


      public function testType(): void
      {
          $aluno = new Aluno("Jose", "B", 12,001);
      }

      public function testNumeroMatricula(): void
      { 
          $aluno = new Aluno("Jose","B",12,1);
          $this->assertEquals(1, $aluno->getMatricula());
      }

       public function testTurma(): void
       { 
            $aluno = new Aluno("Maria","C",10,2);
            $this->assertEquals("C", $aluno->getTurma());
       }

       public function testNota(): void
       {
            $aluno = new Aluno("Joao","C",10,2);
            $aluno->atribuirNota(10,7,9);
            $this->assertEquals(26, $aluno->getNotaGeral());
       }
}