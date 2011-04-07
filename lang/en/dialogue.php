<?php // $Id: dialogue.php,v 1.1.2.5 2009/08/21 04:59:34 deeknow Exp $ 
      // dialogue.php - created with Moodle 1.7 beta + (2006101003)


$string['addmynewentries'] = 'Add my New Entries';
$string['addmynewentry'] = 'Submit entry';
$string['addsubject'] = 'Add Subject';
$string['allowmultiple'] = 'Allow more than one Dialogue with the same person';
$string['allowmultiple_help'] = '<p>This option allows a person to start more than one dialogue with 
    someone else. The default is No, which only allows one (open) 
    dialogue between two people.</p>

<p>Allowing multiple dialogues may result in an abuse of this 
    facility. Some people may be &quot;pestered&quot; by others 
    opening many unwanted dialogues with them.</p>';
$string['allowstudentdialogues'] = 'Allow Student-to-Student Dialogues';
$string['close'] = 'Close';
$string['closed'] = 'Closed';
$string['closedialogue'] = 'Close dialogue';
$string['closedialogue_help'] = '<p>You can close a dialogue at any time. Closing a dialogue
    stops the dialogue and removes it from your current list of dialogues. That is,
    closed dialogues do not appear on this page. </p>

<p>You will be able to view closed dialogues but you can not add to them.
    However, closed dialogues may be deleted if you have updated the dialogue
    and set a period other than zero days for dialogue deletions. After that point they 
    obviously will not be available even for viewing.</p>
    
<p>If you do close this dialogue, then you will have to start a new dialogue
    if you want to continue to &quot;talk&quot; with this person. That person
    will re-appear in the list of people you can start dialogues with.</p>';
$string['closeddialogues'] = 'Closed Dialogues';
$string['confirmclosure'] = '<p>You are about to close a dialogue with {$a}. Closed dialogues cannot be reopened. If you close this dialogue you can view it but not add to it, and you will have to start another dialogue to contnue &quot;talking&quot; this person.<br /><br />Are you sure you want to close this dialogue?';
$string['configtrackreadentries'] = 'Set to \'yes\' if you want to track read/unread for each user.';
$string['trackdialogue'] = 'Track unread entries';
$string['deleteafter'] = 'Delete Closed Dialogues after (Days)';
$string['deleteafter_help'] = 'Delete Closed Dialogues after (Days)';
$string['dialogueclosed'] = 'Dialogue Closed';
$string['dialogueintro'] = 'Dialogue Introduction';
$string['dialoguemail'] = '{$a->userfrom} has posted a new entry in your

dialogue entry for \'{$a->dialogue}\'

You can see it appended to your dialogue entry:

    {$a->url}';
$string['dialoguemailhtml'] = '{$a->userfrom} has posted a new entry in your

dialogue entry for \'<i>{$a->dialogue}</i>\'<br /><br />

You can see it appended to your <a href=\"{$a->url}\">dialogue</a>.';
$string['dialoguename'] = 'Dialogue name';
$string['dialogueopened'] = 'Dialogue opened with {$a->name}</p><p>You have $a->edittime mins to edit it if you want to make any changes.</p>';
$string['dialoguewith'] = 'Dialogue with {$a}';
$string['everybody'] = 'Everybody';
$string['erroremptymessage'] = 'Error: empty message.';
$string['firstentry'] = 'First Entry';
$string['furtherinformation'] = 'Further Information';
$string['lastentry'] = 'Last Entry';
$string['maildefault'] = 'Mail Default';
$string['mailnotification'] = 'Mail Notification';
$string['mailnotification_help'] = 'Mail Notification Help';
$string['modulename'] = 'Dialogue';
$string['modulenameplural'] = 'Dialogues';
$string['namehascloseddialogue'] = '{$a} has closed dialogue';
$string['newdialogueentries'] = 'New dialogue entries';
$string['newentry'] = 'New Entry';
$string['noavailablepeople'] = 'There is no one available to have a Dialogue with.';
$string['nopersonchosen'] = 'No Person Chosen';
$string['nosubject'] = 'No Subject Entered';
$string['notavailable'] = 'Dialogues are not available to guest users';
$string['notextentered'] = 'No Text Entered';
$string['notstarted'] = 'You have not started this dialogue yet';
$string['notyetseen'] = 'Not yet seen';
$string['numberofentries'] = 'Number of entries';
$string['numberofentriesadded'] = '<p>Number of entries added: {$a->number}</p><p>You have {$a->edittime} mins to edit it if you want to make any changes.</p>';
$string['of'] = 'of';
$string['onwrote'] = 'On {$a} wrote';
$string['onyouwrote'] = 'On {$a} you wrote';
$string['open'] = 'Open';
$string['openadialoguewith'] = 'Open a Dialogue with';
$string['opendialogue'] = 'Submit dialogue';
$string['opendialogueentries'] = 'Open dialogue entries';
$string['opendialogues'] = 'Open Dialogues';
$string['pane0'] = 'Open a Dialogue';
$string['pane1'] = '{$a} Current Open Dialogues';
$string['pane1one'] = 'One Open Dialogue';
$string['pane3'] = '{$a} Closed Dialogues';
$string['pane3one'] = '1 Closed Dialogue';
$string['pluginadministration'] = 'Dialogue administration';
$string['pluginname'] = 'Dialogue';
$string['questions'] = 'Questions';
$string['questions_help'] = 'Questions help';
$string['seen'] = 'Seen {$a} ago';
$string['sendmailmessages'] = 'Send Mail Messages about my new entries';
$string['status'] = 'Status';
$string['studenttostudent'] = 'Student to Student';
$string['subject'] = 'Subject';
$string['subjectadded'] = 'Subject Added';
$string['teachertostudent'] = 'Teacher to Student';
$string['typefirstentry'] = 'Type the first entry here';
$string['typefollowup'] = 'Type follow-up here';
$string['typeofdialogue'] = 'Type of Dialogue';
$string['typeofdialogue_help'] = 'Type of Dialogue Help';
$string['typereply'] = 'Type reply here';
$string['viewallentries'] = 'View {$a} Dialogue entries';
$string['dialoguebetween'] = 'Dialogue beweeen {$a->sender} and {$a->recipient} ';
$string['attachment'] = 'Attachment: ';
$string['edittime'] = 'Edit time (minutes)';
$string['edittime_help'] = 'Edit time help';
$string['otherdialogues'] = 'Other dialogues';
$string['replyupdated'] = 'Reply updated';
$string['dialogue:open'] = 'Open';
$string['dialogue:participate'] = 'Participate';
$string['dialogue:manage'] = 'Manage';
$string['dialogue:viewall'] = 'View any dialogue';
$string['dialogue:participateany'] = 'Participate in any dialogue';
$string['dialogue:close'] = 'Close';
$string['currentattachment'] = 'Current attachment: ';
$string['deleteattachment'] = 'Delete attachment';
$string['updated'] = '(Updated on, {$a})';
$string['unread'] = 'Unread entries';
$string['unreadnumber'] = '{$a} unread entries';
$string['unreadone'] = '1 unread entry';
$string['posts'] = 'posts';
$string['noentry'] = 'No entries';
$string['cannotadd'] = 'Cannot Open a dialogue unless you are a member of this group';
$string['cannotaddall'] = 'Cannot Open a dialogue with all participants';
?>
