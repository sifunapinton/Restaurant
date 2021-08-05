<?php if(count($issue) > 0): ?>
    <div class = "issue">
        <?php foreach($issue as $issue): ?>
            <p><?php echo $issue; ?></p>
        <?php endforeach ?>
    </div>
<?php endif?>