<?php

use yii\db\Schema;

class m170913_130101_SlideTables extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('{{%slide_composer}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(32)->notNull(),
            'description' => $this->text(),
            'hash_id'=>$this->string(32),
            'position'=>$this->string(32)
            ], $tableOptions);


        $this->createTable('{{%slide_composer_slide}}', [
            'id' => $this->primaryKey(),
            'cssID' => $this->string(32),
            'css_class' => $this->string(255),
            'css_style' => $this->text(),
            'data_ls' => $this->text(),
            'composerID' => $this->integer(11),
            'bg' => $this->string(255),
            'hash_id'=>$this->string(32)
        ], $tableOptions);


        $this->createTable('{{%slide_composer_slide_layer}}', [
            'id' => $this->primaryKey(),
            'html_tag' => $this->string(32)->notNull(),
            'data_ls' => $this->text(),
            'slideID' => $this->integer(),
            'html_style' => $this->text(),
            'html_class' => $this->string(255),
            'settings' => $this->string(255),
            'between_tag' => $this->string(255),
            'end_tag' => $this->string(255),
            'classID' => $this->string(32),
            'hash_id'=>$this->string(32)
        ], $tableOptions);
        $this->addForeignKey('slide_composer_slide_slide_composer_id_fk','{{%slide_composer_slide}}','composerID','{{%slide_composer}}','id');
        $this->addForeignKey('slide_composer_slide_layer_slide_composer_slide_id_fk','{{%slide_composer_slide_layer}}','slideID','{{%slide_composer_slide}}','id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%slide_composer}}');
        $this->dropTable('{{%slide_composer_slide}}');
        $this->dropTable('{{%slide_composer_slide_layer}}');
    }
}
