<?php
declare(strict_types=1);

require_once '../src/Aluno.php';

use PHPUnit\Framework\TestCase;

final class AlunoTest extends TestCase{


      public function testType(): void
      {
          $aluno = new Aluno("Jose", "B", 12,001);
      }

      public function testNumeroMatricula(): void 
      { 
          $aluno = new Aluno("Jose","B",12,001);
          $this->assertEquals(001, $aluno->getMatricula());
      }

       public function testTurma(): void
       { 
            $aluno = new Aluno("Maria","C",10,002);
            $this->assertEquals("C", $aluno->getTurma());

       }

       public function testNota(): void 
       {
            $aluno = new Aluno("Joao","C",10,002);
            $aluno->atribuirNota(10,7,9);
            $this->assertEquals(25, $aluno->gerNotaGeral());
       }
}














?>