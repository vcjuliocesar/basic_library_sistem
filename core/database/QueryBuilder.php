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
    $conditions = [];

    foreach ($parameters as $key => $value) {
      $conditions[]=$key."=:".$key;
    }
    $sql = sprintf('select * from %s where %s',
            $table,
            implode(' and ',$conditions)
          );
    //dd($sql);
    $statement = $this->pdo->prepare($sql);

    $statement->execute($parameters);

    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function delete($table,$parameters)
  {
    $conditions = [];

    foreach ($parameters as $key => $value) {
      $conditions[]=$key."=:".$key;
    }
    $sql = sprintf('delete from %s where %s',
            $table,
            implode(' and ',$conditions)
          );
    $statement = $this->pdo->prepare($sql);

    $statement->execute($parameters);

    //return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function update($table,$parameters)
  {
    $conditions = [];

    foreach ($parameters as $key => $value) {
      $conditions[]=$key."=:".$key;
    }
    $sql = sprintf('update %s set %s where %s',
            $table,
            implode(',',$conditions),
            $conditions[0],
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
}
