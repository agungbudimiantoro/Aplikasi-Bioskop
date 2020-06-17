<?php $pager->setSurroundCount(2) ?>
<ul class="pagination">
    <?php if ($pager->hasPrevious()) : ?>
        <li class="waves-effect">
            <a href="<?= $pager->getFirst() ?>" aria-label="First">
                <span aria-hidden="true">First</span>
            </a>
        </li class="waves-effect">
        <li>
            <a href="<?= $pager->getPrevious() ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li class="waves-effect">
    <?php endif ?>

    <?php foreach ($pager->links() as $link) : ?>
        <li class="waves-effect" <?= $link['active'] ? 'class="active"' : '' ?>>
            <a href="<?= $link['uri'] ?>">
                <?= $link['title'] ?>
            </a>
        </li>
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
        <li class="waves-effect">
            <a href="<?= $pager->getNext() ?>" aria-label="Previous">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
        <li class="waves-effect">
            <a href="<?= $pager->getLast() ?>" aria-label="Last">
                <span aria-hidden="true">Last</span>
            </a>
        </li>
    <?php endif ?>
</ul>