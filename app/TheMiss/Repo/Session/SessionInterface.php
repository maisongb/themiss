<?php namespace TheMiss\Repo\Session;

interface SessionInterface
{

    /**
     * Store a newly created resource in storage.
     *
     * @param $data
     * @return Response
     */
    public function store($data);

    /**
     * Remove the specified resource from storage.
     *
     * @internal param int $id
     * @return Response
     */
    public function destroy();

}