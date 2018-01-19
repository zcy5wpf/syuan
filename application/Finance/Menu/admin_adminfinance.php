<?php
return array (
  'app' => 'Finance',
  'model' => 'AdminFinance',
  'action' => 'default',
  'data' => '',
  'type' => '1',
  'status' => '1',
  'name' => '财务',
  'icon' => 'cny',
  'remark' => '',
  'listorder' => '35',
  'children' => 
  array (
    array (
      'app' => 'Finance',
      'model' => 'AdminConfig',
      'action' => 'index',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '在线支付',
      'icon' => '',
      'remark' => '',
      'listorder' => '0',
      'children' => 
      array (
        array (
          'app' => 'Finance',
          'model' => 'AdminConfig',
          'action' => 'setting',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '支付方式配置',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
          'children' => 
          array (
            array (
              'app' => 'Finance',
              'model' => 'AdminConfig',
              'action' => 'setting_post',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '支付方式配置提交',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
          ),
        ),
        array (
          'app' => 'Finance',
          'model' => 'AdminConfig',
          'action' => 'enable',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '支付方式启用',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
        array (
          'app' => 'Finance',
          'model' => 'AdminConfig',
          'action' => 'disable',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '支付方式禁用',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
        array (
          'app' => 'Finance',
          'model' => 'AdminConfig',
          'action' => 'add',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '支付方式添加',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
          'children' => 
          array (
            array (
              'app' => 'Finance',
              'model' => 'AdminConfig',
              'action' => 'add_post',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '保存提交',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
          ),
        ),
        array (
          'app' => 'Finance',
          'model' => 'AdminConfig',
          'action' => 'edit',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '支付方式编辑',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
          'children' => 
          array (
            array (
              'app' => 'Finance',
              'model' => 'AdminConfig',
              'action' => 'edit_post',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '保存提交',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
          ),
        ),
      ),
    ),
    array (
      'app' => 'Finance',
      'model' => 'AdminFinance',
      'action' => 'users_index',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '用户财务流水',
      'icon' => '',
      'remark' => '',
      'listorder' => '0',
    ),
    array (
      'app' => 'Finance',
      'model' => 'AdminFinance',
      'action' => 'charge',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '充值记录',
      'icon' => '',
      'remark' => '',
      'listorder' => '0',
    ),
    array (
      'app' => 'Finance',
      'model' => 'AdminFinance',
      'action' => 'cashout',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '提现记录',
      'icon' => '',
      'remark' => '',
      'listorder' => '0',
      'children' => 
      array (
        array (
          'app' => 'Finance',
          'model' => 'AdminFinance',
          'action' => 'cashout_mod',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '审核',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
        array (
          'app' => 'Finance',
          'model' => 'AdminFinance',
          'action' => 'cashout_pay',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '转账',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
      ),
    ),
    array (
      'app' => 'Finance',
      'model' => 'AdminFinance',
      'action' => 'users_charge',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '后台充值',
      'icon' => '',
      'remark' => '',
      'listorder' => '0',
      'children' => 
      array (
        array (
          'app' => 'Finance',
          'model' => 'AdminFinance',
          'action' => 'users_charge_confirm',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '充值确认',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
        array (
          'app' => 'Finance',
          'model' => 'AdminFinance',
          'action' => 'users_charge_post',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '充值',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
      ),
    ),
    array (
      'app' => 'Finance',
      'model' => 'AdminFinance',
      'action' => 'users_account',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '用户财务',
      'icon' => '',
      'remark' => '',
      'listorder' => '0',
    ),
    array (
      'app' => 'Finance',
      'model' => 'AdminGold',
      'action' => 'index',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '用户积分流水',
      'icon' => '',
      'remark' => '',
      'listorder' => '0',
    ),
  ),
);