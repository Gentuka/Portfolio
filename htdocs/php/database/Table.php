<?php

class Table
{
    private object $conn;

    public function __construct(object $conn)
    {
        $this->conn = $conn;
    }

    public function createTable(string $tablename): void
    {
        $sql = sprintf('CREATE TABLE %s (id int NOT NULL PRIMARY KEY AUTO_INCREMENT)', $tablename);
        $this->conn->query($sql);
    }

    /**
     * @param array<string> $columnNames
     * @param array<string> $datentypen
     */
    public function addColumn(string $tablename, array $columnNames, array $datentypen): void
    {
        for ($i = 0; $i < count($columnNames); $i++) {
            $sql = sprintf('ALTER TABLE %s ADD %s %s', $tablename, $columnNames[$i], $datentypen[$i]);
            $this->conn->query($sql);
        }
    }


    /**
     * @param array<mixed> $values
     */
    public function insert(string $tablename, array $values): void
    {
        $columnNames = $this->getColumnNamesByTable($tablename);
        $columnNamesAsString = implode(',', $columnNames);

        $useableValues = '';
        foreach ($values as $value) {
            $useableValues .= '\'' . $value . '\',';
        }
        $useableValues = substr($useableValues, 0, -1);

        $sql = sprintf('INSERT INTO `%s`(%s) VALUES (%s)', $tablename, $columnNamesAsString, $useableValues);
        $this->conn->query($sql);
    }

    public function update(string $tablename, int $id, string $columnName, string $value): void
    {
        $sql = sprintf('UPDATE `%s` SET `%s`=\'%s\' WHERE `ID` = %d', $tablename, $columnName, $value, $id);
        $this->conn->query($sql);
    }

    /**
     * @param string $tablename
     * @return array<mixed>
     */
    public function read(string $tablename, int $id): array
    {
        $sql = sprintf('SELECT * FROM `%s` WHERE `ID` = %d', $tablename, $id);
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    public function delete(string $tablename, int $id): void
    {
        $sql = sprintf('DELETE FROM `%s` WHERE `ID` = %d', $tablename, $id);
        $this->conn->query($sql);
    }

    /**
     * @param string $tablename
     * @return array<mixed>
     */
    public function getColumnNamesByTable(string $tablename): array
    {
        $sql = sprintf('SELECT * FROM `%s`', $tablename);
        $result = $this->conn->query($sql);
        $table = $result->fetch_all(MYSQLI_ASSOC);

        if ($table) {
            $firstEntry = array_shift($table);
            $columnNames = array_keys($firstEntry);
            unset($columnNames[0]);
            return $columnNames;
        }

        return [];
    }
}
