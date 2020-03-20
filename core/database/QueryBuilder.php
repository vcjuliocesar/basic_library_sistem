<?php

class QueryBuilder
{

  protected $pdo;

  public function __construct($pdo)
  {
      $this->pdo = $pdo;
  }

  public function selectAll($table)
  {
    $statement = $this->pdo->prepare("select * from {$table}");

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function selectWhere($table,$parameters)
  {

    $sql = sprintf('select * from %s where %s',
            $table,
            implode(' and ',$this->renderParameters($parameters))
          );
    //dd($sql);
    $statement = $this->pdo->prepare($sql);

    $statement->execute($parameters);

    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function delete($table,$parameters)
  {

    $sql = sprintf('delete from %s where %s',
            $table,
            implode(' and ',$this->renderParameters($parameters))
          );
    $statement = $this->pdo->prepare($sql);

    $statement->execute($parameters);

    //return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function update($table,$parameters,$criteria)
  {
    $sql = sprintf('update %s set %s where %s',
            $table,
            implode(',',$this->renderParameters($parameters)),
            implode(',',$this->renderParameters($criteria)),
          );

    $statement = $this->pdo->prepare($sql);

    $statement->execute($parameters);

    //return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function insert($table,$parameters)
  {
    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      $table,
      implode(',',array_keys($parameters)),
      ':' . implode(', :',array_keys($parameters))
    );

    try {
      $statement = $this->pdo->prepare($sql);
      $statement->execute($parameters);
    } catch (\Exception $e) {
      die("Woops, something went wrong". $e->getMessage());
    }
  }

  private function renderParameters($parameters)
  {
    $conditions = [];
    foreach ($parameters as $key => $value) {
      $conditions[] = $key."=:".$key;
    }
    return $conditions;
  }
}
