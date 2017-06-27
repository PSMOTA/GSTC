<?php /* Smarty version 2.6.27, created on 2017-06-26 15:56:32
         compiled from CRM/Contact/Page/View/Note.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Page/View/Note.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Page/View/Note.tpl', 31, false),array('block', 'crmButton', 'CRM/Contact/Page/View/Note.tpl', 41, false),array('modifier', 'crmDate', 'CRM/Contact/Page/View/Note.tpl', 32, false),array('modifier', 'nl2br', 'CRM/Contact/Page/View/Note.tpl', 34, false),array('modifier', 'escape', 'CRM/Contact/Page/View/Note.tpl', 112, false),array('modifier', 'mb_truncate', 'CRM/Contact/Page/View/Note.tpl', 233, false),array('modifier', 'count_characters', 'CRM/Contact/Page/View/Note.tpl', 235, false),array('modifier', 'replace', 'CRM/Contact/Page/View/Note.tpl', 250, false),array('function', 'cycle', 'CRM/Contact/Page/View/Note.tpl', 52, false),array('function', 'crmURL', 'CRM/Contact/Page/View/Note.tpl', 103, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="view-content">
<?php if ($this->_tpl_vars['action'] == 4): ?>    <?php if ($this->_tpl_vars['notes']): ?>
        <div class="crm-block crm-content-block crm-note-view-block">
          <table class="crm-info-panel">
            <tr><td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Subject<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td><?php echo $this->_tpl_vars['note']['subject']; ?>
</td></tr>
            <tr><td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['note']['modified_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</td></tr>
            <tr><td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Privacy:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td><?php echo $this->_tpl_vars['note']['privacy']; ?>
</td></tr>
            <tr><td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Note:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['note']['note'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td></tr>

            <?php if ($this->_tpl_vars['currentAttachmentInfo']): ?>
               <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/attachment.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
          </table>
          <div class="crm-submit-buttons">
            <?php $this->_tag_stack[] = array('crmButton', array('class' => 'cancel','icon' => 'times','p' => 'civicrm/contact/view','q' => "selectedChild=note&reset=1&cid=".($this->_tpl_vars['contactId']))); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Done<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </div>

        <?php if ($this->_tpl_vars['comments']): ?>
        <fieldset>
        <legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Comments<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
            <table class="display">
                <thead>
                    <tr><th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Comment<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th><th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Created By<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th><th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th></tr>
                </thead>
                <?php $_from = $this->_tpl_vars['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
                    <tr class="<?php echo smarty_function_cycle(array('values' => 'odd-row,even-row'), $this);?>
"><td><?php echo $this->_tpl_vars['comment']['note']; ?>
</td><td><?php echo $this->_tpl_vars['comment']['createdBy']; ?>
</td><td><?php echo $this->_tpl_vars['comment']['modified_date']; ?>
</td></tr>
                <?php endforeach; endif; unset($_from); ?>
            </table>
        </fieldset>
        <?php endif; ?>

        </div>
        <?php endif; ?>
<?php elseif ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2): ?>   <div class="crm-block crm-form-block crm-note-form-block">
    <div class="content crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
        <table class="form-layout">
            <tr>
                <td class="label"><?php echo $this->_tpl_vars['form']['subject']['label']; ?>
</td>
                <td>
                    <?php echo $this->_tpl_vars['form']['subject']['html']; ?>

                </td>
            </tr>
            <tr>
                <td class="label"><?php echo $this->_tpl_vars['form']['privacy']['label']; ?>
</td>
                <td>
                    <?php echo $this->_tpl_vars['form']['privacy']['html']; ?>

                </td>
            </tr>
            <tr>
                <td class="label"><?php echo $this->_tpl_vars['form']['note']['label']; ?>
</td>
                <td>
                    <?php echo $this->_tpl_vars['form']['note']['html']; ?>

                </td>
            </tr>
            <tr class="crm-activity-form-block-attachment">
                <td colspan="2">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/attachment.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </td>
            </tr>
        </table>

  <div class="crm-section note-buttons-section no-label">
   <div class="content crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
   <div class="clear"></div>
  </div>
    </div>
<?php endif; ?>
<?php if (( $this->_tpl_vars['action'] == 8 )): ?>
<div class=status><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['notes'][$this->_tpl_vars['id']]['note'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you want to delete the note '%1'?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>

<?php endif; ?>

<?php if ($this->_tpl_vars['permission'] == 'edit' && ( $this->_tpl_vars['action'] == 16 )): ?>
   <div class="action-link">
   <a accesskey="N" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/note','q' => "cid=".($this->_tpl_vars['contactId'])."&action=add"), $this);?>
" class="button medium-popup"><span><i class="crm-i fa-comment"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Note<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
   </div>
   <div class="clear"></div>
<?php endif; ?>
<div class="crm-content-block">

<?php if ($this->_tpl_vars['notes'] && $this->_tpl_vars['action'] == 16): ?>

<script type="text/javascript">
    var commentAction = '<?php echo ((is_array($_tmp=$this->_tpl_vars['commentAction'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
'

    <?php echo '
    var commentRows = {};

    function showHideComments( noteId ) {

        elRow = cj(\'tr#cnote_\'+ noteId)

        if (elRow.hasClass(\'view-comments\')) {
            cj(\'tr.note-comment_\'+ noteId).remove()
            commentRows[\'cnote_\'+ noteId] = {};
            cj(\'tr#cnote_\'+ noteId +\' span.icon_comments_show\').show();
            cj(\'tr#cnote_\'+ noteId +\' span.icon_comments_hide\').hide();
            elRow.removeClass(\'view-comments\');
        } else {
            var getUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/rest','h' => 0), $this);?>
"<?php echo ';
            cj.post(getUrl, { fnName: \'civicrm/note/tree_get\', json: 1, id: noteId, sequential: 1 }, showComments, \'json\' );
        }

    }

    function showComments (response) {
        var urlTemplate = \''; ?>
<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=",'h' => 0), $this);?>
<?php echo '\'
        if (response[\'values\'][0] && response[\'values\'][0].entity_id) {
            var noteId = response[\'values\'][0].entity_id
            var row = cj(\'tr#cnote_\'+ noteId);

            row.addClass(\'view-comments\');

            if (row.hasClass(\'odd\') ) {
                var rowClassOddEven = \'odd\'
            } else {
                var rowClassOddEven = \'even\'
            }

            if ( commentRows[\'cnote_\'+ noteId] ) {
                for ( var i in commentRows[\'cnote_\'+ noteId] ) {
                    return false;
                }
            } else {
                commentRows[\'cnote_\'+ noteId] = {};
            }
            for (i in response[\'values\']) {
                if ( response[\'values\'][i].id ) {
                    if ( commentRows[\'cnote_\'+ noteId] &&
                        commentRows[\'cnote_\'+ noteId][response[\'values\'][i].id] ) {
                        continue;
                    }
                    str = \'<tr id="cnote_\'+ response[\'values\'][i].id +\'" class="\'+ rowClassOddEven +\' note-comment_\'+ noteId +\'">\'
                        + \'<td></td>\'
                        + \'<td style="padding-left: 2em">\'
                        + response[\'values\'][i].note
                        + \'</td><td>\'
                        + response[\'values\'][i].subject
                        + \'</td><td>\'
                        + response[\'values\'][i].modified_date
                        + \'</td><td>\'
                        + \'<a href="\'+ urlTemplate + response[\'values\'][i].createdById +\'">\'+ response[\'values\'][i].createdBy +\'</a>\'
                        + \'</td><td>\'
                        + response[\'values\'][i].attachment
                        + \'</td><td>\'+ commentAction.replace(/{cid}/g, response[\'values\'][i].createdById).replace(/{id}/g, response[\'values\'][i].id) +\'</td></tr>\'

                    commentRows[\'cnote_\'+ noteId][response[\'values\'][i].id] = str;
                }
            }
            drawCommentRows(\'cnote_\'+ noteId);

            cj(\'tr#cnote_\'+ noteId +\' span.icon_comments_show\').hide();
            cj(\'tr#cnote_\'+ noteId +\' span.icon_comments_hide\').show();
        } else {
            CRM.alert(\''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no comments for this note<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\', \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>None Found<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\', \'alert\');
        }

    }

    function drawCommentRows(rowId) {
      if (rowId) {
        row = cj(\'tr#\'+ rowId)
        for (i in commentRows[rowId]) {
            row.after(commentRows[rowId][i]);
            row = cj(\'tr#cnote_\'+ i);
        }
      }
    }

    '; ?>

</script>

<div class="crm-results-block">
<div id="notes">
    <?php echo '<table id="options" class="display crm-sortable" data-order=\'[[3,"desc"]]\'><thead><tr><th data-orderable="false"></th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Note'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Subject'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Date'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Created By'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th data-orderable="false">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Attachment(s)'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th data-orderable="false"></th></tr></thead>'; ?><?php $_from = $this->_tpl_vars['notes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['note']):
?><?php echo '<tr id="cnote_'; ?><?php echo $this->_tpl_vars['note']['id']; ?><?php echo '" class="'; ?><?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?><?php echo ' crm-note"><td class="crm-note-comment">'; ?><?php if ($this->_tpl_vars['note']['comment_count']): ?><?php echo '<span id="'; ?><?php echo $this->_tpl_vars['note']['id']; ?><?php echo '_show" style="display:block" class="icon_comments_show"><a href="#" onclick="showHideComments('; ?><?php echo $this->_tpl_vars['note']['id']; ?><?php echo '); return false;" title="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Show comments for this note.'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '"><i class="crm-i fa-caret-right"></i></span></a></span><span id="'; ?><?php echo $this->_tpl_vars['note']['id']; ?><?php echo '_hide" style="display:none" class="icon_comments_hide"><a href="#" onclick="showHideComments('; ?><?php echo $this->_tpl_vars['note']['id']; ?><?php echo '); return false;" title="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Hide comments for this note.'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '"><i class="crm-i fa-caret-down"></i></span></a></span>'; ?><?php else: ?><?php echo '<span class="crm-i fa-caret-right" id="'; ?><?php echo $this->_tpl_vars['note']['id']; ?><?php echo '_hide" style="display:none"></span>'; ?><?php endif; ?><?php echo '</td><td class="crm-note-note">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['note']['note'])) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, 80, "...", false) : smarty_modifier_mb_truncate($_tmp, 80, "...", false)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?><?php echo ''; ?><?php echo ''; ?><?php $this->assign('noteSize', ((is_array($_tmp=$this->_tpl_vars['note']['note'])) ? $this->_run_mod_handler('count_characters', true, $_tmp, true) : smarty_modifier_count_characters($_tmp, true))); ?><?php echo ''; ?><?php if ($this->_tpl_vars['noteSize'] > 80): ?><?php echo '<a class="crm-popup" href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/note','q' => "action=view&selectedChild=note&reset=1&cid=".($this->_tpl_vars['contactId'])."&id=".($this->_tpl_vars['note']['id'])), $this);?><?php echo '">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '(more)'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</a>'; ?><?php endif; ?><?php echo '</td><td class="crm-note-subject">'; ?><?php echo $this->_tpl_vars['note']['subject']; ?><?php echo '</td><td class="crm-note-modified_date" data-order="'; ?><?php echo $this->_tpl_vars['note']['modified_date']; ?><?php echo '">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['note']['modified_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td class="crm-note-createdBy"><a href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['note']['contact_id'])), $this);?><?php echo '">'; ?><?php echo $this->_tpl_vars['note']['createdBy']; ?><?php echo '</a></td><td class="crm-note-attachment">'; ?><?php $_from = $this->_tpl_vars['note']['attachment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fileinfo']):
?><?php echo ''; ?><?php echo $this->_tpl_vars['fileinfo']; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</td><td class="nowrap">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['note']['action'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'xx', $this->_tpl_vars['note']['id']) : smarty_modifier_replace($_tmp, 'xx', $this->_tpl_vars['note']['id'])); ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>

 </div>
</div>
<?php elseif (( $this->_tpl_vars['action'] == 16 )): ?>
   <div class="messages status no-popup">
      <div class="icon inform-icon"></div>
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no Notes for this contact.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
   </div>
<?php endif; ?>
</div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>