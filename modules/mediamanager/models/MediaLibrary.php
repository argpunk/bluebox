<?php
class MediaLibrary extends Bluebox_Record
{
    /**
     * Sets the table name, and defines the table columns.
     */
    public function setTableDefinition()
    {
        // COLUMN DEFINITIONS
        $this->hasColumn('media_id', 'integer', 11, array('unsigned' => true, 'notnull' => true, 'primary' => true, 'autoincrement' => true));
        $this->hasColumn('user_id', 'integer', 11, array('unsigned' => true));
        $this->hasColumn('description', 'string', 80, array('notblank' => true));
        $this->hasColumn('filename', 'string', 80, array('notblank' => true));
        $this->hasColumn('path', 'string', 512, array('notblank' => true));
        $this->hasColumn('category', 'integer', 11, array('default' => 0));
        //$this->hasColumn('size', 'integer', 11, array('notblank' => true));
        //$this->hasColumn('type', 'string', 256, array('notblank' => true));
        //$this->hasColumn('duration', 'decimal', 10, array('scale' => 2));
        //$this->hasColumn('audio_bit_rate', 'integer', 11);
        //$this->hasColumn('audio_sample_rate', 'integer', 11);
    }

    /**
     * Sets up relationships, behaviors, etc.
     */
    public function setUp()
    {
        $this->hasOne('User', array('local' => 'user_id', 'foreign' => 'user_id', 'onDelete' => 'CASCADE'));

        $this->actAs('GenericStructure');
        $this->actAs('Timestampable');
    }
}