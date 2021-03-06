<?php
    /**
     * Comment Template.
     *
     * @todo -c Implement .this needs to be sorted out.
     *
     * Copyright (c) 2009 Carl Sutton ( dogmatic69 )
     *
     * Licensed under The MIT License
     * Redistributions of files must retain the above copyright notice.
     *
     * @filesource
     * @copyright     Copyright (c) 2009 Carl Sutton ( dogmatic69 )
     * @link          http://infinitas-cms.org
     * @package       sort
     * @subpackage    sort.comments
     * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
     * @since         0.5a
     */
	echo $this->Form->create('CmsContent', array('type' => 'file', 'inputDefaults' => array('empty' => Configure::read('Website.empty_select'))));
		echo $this->Infinitas->adminEditHead();

		$tabs = array(
			__d('contents', 'Content'),
			__d('cms', 'Status'),
			__d('contents', 'Author'),
			__d('cms', 'Other Data')
		);
		
		$content = array(
			$this->element('Contents.content_form'),
			implode('', array($this->Form->input('active'), $this->Html->datePicker(array('start_date', 'end_date'), 'CmsContent', true))),
			$this->element('Contents.author_form'),
			implode('', array($this->Form->input('id'),
				$this->Form->hidden('ContentConfig.id'), $this->element('Contents.meta_form')))
		);
		
		echo $this->Design->tabs($tabs, $content);
	echo $this->Form->end();