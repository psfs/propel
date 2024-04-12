
<?php if ($preSave) :?>
    /**
     * Code to be run before persisting the object
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preSave(?ConnectionInterface $con = null): bool
    {
        <?php if ($hasBaseClass) : ?>
        if (@is_callable('parent::preSave')) {
            return call_user_func([parent::class, 'preSave'],$con);
        }
        <?php endif?>
        return true;
    }

<?php endif?>
<?php if ($postSave) :?>
    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postSave(?ConnectionInterface $con = null): void
    {
        <?php if ($hasBaseClass) : ?>
        if (@is_callable('parent::postSave')) {
            call_user_func([parent::class, 'postSave'], $con);
        }
        <?php endif?>
    }

<?php endif?>
<?php if ($preInsert) :?>
    /**
     * Code to be run before inserting to database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preInsert(?ConnectionInterface $con = null): bool
    {
        <?php if ($hasBaseClass) : ?>
        if (@is_callable('parent::preInsert')) {
            return call_user_func([parent::class, 'preInsert'], $con);
        }
        <?php endif?>
        return true;
    }

<?php endif?>
<?php if ($postInsert) :?>
    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postInsert(?ConnectionInterface $con = null): void
    {
        <?php if ($hasBaseClass) : ?>
        if (@is_callable('parent::postInsert')) {
            call_user_func([parent::class, 'postInsert'], $con);
        }
        <?php endif?>
    }

<?php endif?>
<?php if ($preUpdate) :?>
    /**
     * Code to be run before updating the object in database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preUpdate(?ConnectionInterface $con = null): bool
    {
        <?php if ($hasBaseClass) : ?>
        if (@is_callable('parent::preUpdate')) {
            return call_user_func([parent::class, 'preUpdate'], $con);
        }
        <?php endif?>
        return true;
    }

<?php endif?>
<?php if ($postUpdate) :?>
    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postUpdate(?ConnectionInterface $con = null): void
    {
        <?php if ($hasBaseClass) : ?>
        if (@is_callable('parent::postUpdate')) {
            call_user_func([parent::class, 'postUpdate'], $con);
        }
        <?php endif?>
    }

<?php endif?>
<?php if ($preDelete) :?>
    /**
     * Code to be run before deleting the object in database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preDelete(?ConnectionInterface $con = null): bool
    {
        <?php if ($hasBaseClass) : ?>
        if (@is_callable('parent::preDelete')) {
            return call_user_func([parent::class, 'preDelete'], $con);
        }
        <?php endif?>
        return true;
    }

<?php endif?>
<?php if ($postDelete) :?>
    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postDelete(?ConnectionInterface $con = null): void
    {
        <?php if ($hasBaseClass) : ?>
        if (@is_callable('parent::postDelete')) {
            call_user_func([parent::class, 'postDelete'], $con);
        }
        <?php endif?>
    }

<?php endif;
