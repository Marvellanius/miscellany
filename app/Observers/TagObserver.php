<?php

namespace App\Observers;

use App\Models\MiscModel;
use App\Models\Tag;

class TagObserver extends MiscObserver
{
    /**
     * @param Tag $model
     */
    public function deleting(MiscModel $model)
    {
        parent::deleting($model);

        /**
         * We need to keep this, because the tree plugin wants to delete child when deleting the parent. It's stupid.
         */
        // Set all children to no longer have this section
        foreach ($model->allChildren() as $child) {
            $child->child->tag_id = null;
            $child->child->save();
        }

        // Update sub sections to clean them  up
        foreach ($model->tags as $child) {
            $child->tag_id = null;
            $child->save();
        }

        // Refresh the model to make sure we have new foreign keys?
        $model->refresh();
    }
}
