<?php

class Connection
{
    public static function make($config)
    {
        try {
          new PDO(
            $config['connection'].';dbname='.$config['name'],

            $config['username'],

            $config['password'],

            $config['options']
          );
        } catch (\Exception $e) {
          die($e->getMessage());
        }

    }
}
