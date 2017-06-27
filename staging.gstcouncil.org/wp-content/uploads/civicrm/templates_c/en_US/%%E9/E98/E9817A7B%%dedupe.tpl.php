<?php /* Smarty version 2.6.27, created on 2017-06-21 16:27:37
         compiled from CRM/common/dedupe.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/common/dedupe.tpl', 1, false),array('block', 'ts', 'CRM/common/dedupe.tpl', 14, false),array('function', 'crmURL', 'CRM/common/dedupe.tpl', 65, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div id='processDupes' style="display:none;"></div>
<?php echo '
<script type=\'text/javascript\'>

cj( \'#processDupes\' ).hide( );

function processDupes(cid, oid, oper, context, reloadURL) {
        //currently we are doing in a single way.
        //later we might want two way operations.

        if ( !cid || !oid || !oper ) return;

  var title = '; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Mark as Dedupe Exception<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ';
  var msg = '; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you want to mark this pair of contacts as NOT duplicates?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ';
        if ( oper == \'nondupe-dupe\' ) {
    var title = '; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Remove Dedupe Exception<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ';
          var msg = '; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you want to remove this dedupe exception.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ';
        }

  cj("#processDupes").show( );
  cj("#processDupes").dialog({
    title: title,
    modal: true,

    open:function() {
       cj( \'#processDupes\' ).show( ).html( msg );
    },

    buttons: {
      "Cancel": function() {
        cj(this).dialog("close");
      },
      "OK": function() {
              saveProcessDupes( cid, oid, oper, context );
              cj(this).dialog( \'close\' );
        if ( context == \'merge-contact\' && reloadURL ) {
                                     // redirect after a small delay
                                     setTimeout("window.location.href = \'" + reloadURL + "\'", 500);
        }
        else {
          //CRM-15113 this has the effect of causing the alert to display. Also, as they are already \'actioned\' Civi sensibly returns the browser to the
          //search screen
          setTimeout(function(){
            window.location.reload();
          }, 500);
        }
      }
    }
  });
}


function saveProcessDupes( cid, oid, oper, context ) {
    //currently we are doing in a single way.
    //later we might want two way operations.

    if ( !cid || !oid || !oper ) return;

    var statusMsg = '; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Marked as non duplicates.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ';
    if ( oper == \'nondupe-dupe\' ) {
       var statusMsg = '; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Marked as duplicates.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ';
    }

    var url = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/rest','q' => 'className=CRM_Contact_Page_AJAX&fnName=processDupes','h' => 0), $this);?>
"<?php echo ';
    //post the data to process dupes.
    cj.post( url,
            {cid: cid, oid: oid, op: oper},
             function( result ) {
     if ( result.status == oper ) {

        if ( oper == \'dupe-nondupe\' &&
             context == \'dupe-listing\' ) {
              oTable.fnDraw();
        } else if ( oper == \'nondupe-dupe\' ) {
              cj( "#dupeRow_" + cid + \'_\' + oid ).hide( );
        }
                  }
       },
       \'json\' );
}
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>