<?php

namespace App\Http\Controllers;

use App\Algorithms\AlgorithmService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AlgorithmController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function string()
    {
        $algorithms = AlgorithmService::getStringAlgorithms();

        return view('algorithm.index', [
            'title' => 'String algorithms',
            'algorithms' => $algorithms
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function hash()
    {
        $algorithms = AlgorithmService::getHashAlgorithms();

        return view('algorithm.index', [
            'title' => 'Hash algorithms',
            'algorithms' => $algorithms
        ]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param                          $name
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Request $request, $name)
    {
        $algorithm = AlgorithmService::getAllAlgorithms()->filter(function($algorithm) use($name){
            return $algorithm->getSlug() === $name;
        })->first();

        if($request->method() === 'POST')
        {
            $result = !empty($request->get('string')) ? $algorithm->execute(
                $request->get('string'),
                $request->get('salt')
            ) : 'the string input is empty, please provide a string.';
        }

        return view('algorithm.show', compact('algorithm'))
            ->with('string', $result ?? null)
            ->with('salt', $request->get('salt'));
    }
}
