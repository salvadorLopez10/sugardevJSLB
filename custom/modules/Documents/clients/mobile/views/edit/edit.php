<?php
$viewdefs['Documents'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'edit' => 
      array (
        'templateMeta' => 
        array (
          'maxColumns' => '1',
          'widths' => 
          array (
            0 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
            1 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
          ),
          'useTabs' => false,
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_PANEL_DEFAULT',
            'columns' => '1',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 'document_name',
              1 => 
              array (
                'name' => 'tct_image_img_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_IMAGE_IMG',
              ),
              2 => 'category_id',
              3 => 'subcategory_id',
              4 => 'status_id',
              5 => 'active_date',
              6 => 'exp_date',
              7 => 'assigned_user_name',
              8 => 'team_name',
              9 => 
              array (
                'name' => 'filename',
                'comment' => 'The filename of the document attachment',
                'label' => 'LBL_FILENAME',
                'css_class' => 'nuevaClass',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
