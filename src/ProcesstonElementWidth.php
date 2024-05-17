<?php

namespace Processton\ProcesstonElements;

class ProcesstonElementWidth
{
    public $xxxs;
    public $xxs;
    public $xs;
    public $sm;
    public $md;
    public $lg;
    public $xl;
    public $xxl;
    public $xxxl;

    function __construct(
        $sm = 12,
        $md = 12,
        $lg = 12,
        $additional = []
    ) {
        $this->xxxs = array_key_exists('xxxs', $additional) ? $additional['xxxs'] : $sm;
        $this->xxs = array_key_exists('xxs', $additional) ? $additional['xxs'] : $sm;
        $this->xs = array_key_exists('xs', $additional) ? $additional['xs'] : $sm;
        $this->sm = $sm;
        $this->md = $md;
        $this->lg = $lg;
        $this->xl = array_key_exists('xl', $additional) ? $additional['xl'] : $lg;
        $this->xxl = array_key_exists('xxl', $additional) ? $additional['xxl'] : $lg;
        $this->xxxl = array_key_exists('xxxl', $additional) ? $additional['xxxl'] : $lg;
    }

    public function toArray()
    {
        return [
            'xxxs' => $this->xxxs,
            'xxs' => $this->xxs,
            'xs' => $this->xs,
            'sm' => $this->sm,
            'md' => $this->md,
            'lg' => $this->lg,
            'xl' => $this->xl,
            'xxl' => $this->xxl,
            'xxxl' => $this->xxxl,
        ];
    }
}