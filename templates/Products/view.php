<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="products view content">
            <h3><?= h($product->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($product->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image Url') ?></th>
                    <td><?= h($product->image_url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($product->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($product->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vat Rate') ?></th>
                    <td><?= $this->Number->format($product->vat_rate) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($product->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Product Categories') ?></h4>
                <?php if (!empty($product->product_categories)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->product_categories as $productCategory) : ?>
                        <tr>
                            <td><?= h($productCategory->product_id) ?></td>
                            <td><?= h($productCategory->category_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProductCategories', 'action' => 'view', $productCategory->product_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProductCategories', 'action' => 'edit', $productCategory->product_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductCategories', 'action' => 'delete', $productCategory->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productCategory->product_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>