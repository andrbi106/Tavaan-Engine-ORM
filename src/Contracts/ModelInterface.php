<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\ORM\Contracts;

/**
 * قرارداد Model.
 *
 * @see \Tavaan\Engine\Database\ORM\Model
 * @api 1.0
 */
interface ModelInterface
{
    /**
     * متد find.
     *
     * @return mixed
     */
    public function find(/* ... */): mixed;

    /**
     * متد findOrFail.
     *
     * @return mixed
     */
    public function findOrFail(/* ... */): mixed;

    /**
     * متد all.
     *
     * @return mixed
     */
    public function all(/* ... */): mixed;

    /**
     * متد where.
     *
     * @return mixed
     */
    public function where(/* ... */): mixed;

    /**
     * متد query.
     *
     * @return mixed
     */
    public function query(/* ... */): mixed;

    /**
     * متد create.
     *
     * @return mixed
     */
    public function create(/* ... */): mixed;

    /**
     * متد updateOrCreate.
     *
     * @return mixed
     */
    public function updateOrCreate(/* ... */): mixed;

    /**
     * متد firstOrCreate.
     *
     * @return mixed
     */
    public function firstOrCreate(/* ... */): mixed;

    /**
     * متد save.
     *
     * @return mixed
     */
    public function save(/* ... */): mixed;

    /**
     * متد delete.
     *
     * @return mixed
     */
    public function delete(/* ... */): mixed;

    /**
     * متد restore.
     *
     * @return mixed
     */
    public function restore(/* ... */): mixed;

    /**
     * متد forceDelete.
     *
     * @return mixed
     */
    public function forceDelete(/* ... */): mixed;

    /**
     * متد fill.
     *
     * @return mixed
     */
    public function fill(/* ... */): mixed;

    /**
     * متد update.
     *
     * @return mixed
     */
    public function update(/* ... */): mixed;

    /**
     * متد refresh.
     *
     * @return mixed
     */
    public function refresh(/* ... */): mixed;

    /**
     * متد toArray.
     *
     * @return mixed
     */
    public function toArray(/* ... */): mixed;

    /**
     * متد toJson.
     *
     * @return mixed
     */
    public function toJson(/* ... */): mixed;

    /**
     * متد with.
     *
     * @return mixed
     */
    public function with(/* ... */): mixed;

    /**
     * متد withCount.
     *
     * @return mixed
     */
    public function withCount(/* ... */): mixed;

    /**
     * متد load.
     *
     * @return mixed
     */
    public function load(/* ... */): mixed;

    /**
     * متد observe.
     *
     * @return mixed
     */
    public function observe(/* ... */): mixed;

    /**
     * متد addGlobalScope.
     *
     * @return mixed
     */
    public function addGlobalScope(/* ... */): mixed;

    /**
     * متد chunk.
     *
     * @return mixed
     */
    public function chunk(/* ... */): mixed;

    /**
     * متد lazy.
     *
     * @return mixed
     */
    public function lazy(/* ... */): mixed;

    /**
     * متد paginate.
     *
     * @return mixed
     */
    public function paginate(/* ... */): mixed;
}