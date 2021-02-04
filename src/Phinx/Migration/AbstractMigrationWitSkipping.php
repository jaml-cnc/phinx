<?php

namespace Phinx\Migration;

abstract class AbstractMigrationWitSkipping extends AbstractMigration
{
    /**
     * Vrací  název spojení pro které je daná migrace určená (/phinx.yml).
     *
     * @return string
     */
    abstract public function getTargetDatabase();
}
