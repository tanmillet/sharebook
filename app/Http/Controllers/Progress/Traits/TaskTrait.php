<?php
namespace App\Http\Controllers\Progress\Traits;

use App\Task;

/**
 * Created by PhpStorm.
 * Author Terry Lucas
 * Date 17.12.11
 * Time 10:39
 */
trait TaskTrait
{
    /**
     * @author Terry Lucas
     * @param string $task_id
     * @return Task
     */
    public function getTask($task_id): Task
    {
        if (is_null($task_id)) {
            return new Task();
        }

        $task = Task::where('id', base64_decode($task_id))->first();
        if (is_null($task)) {
            $task = new Task();
        }

        return $task;
    }

    /**
     * @author Terry Lucas
     * @param array $attributes
     * @param array $task
     * @return bool
     * @throws \Exception
     */
    public function uporcreateTask(array $attributes, array $task): bool
    {
        try {
            $res = Task::updateOrCreate($attributes, $task);
        } catch (\Exception $exception) {
            throw  $exception;
        }

        return (is_null($res) || !isset($res)) ? FALSE : TRUE;
    }

    /**
     * @author Terry Lucas
     * @param $project_tag
     */
    public function createTaskTag($project_tag)
    {

    }
}