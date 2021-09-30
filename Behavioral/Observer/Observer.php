<?php

namespace DesignPatterns\Behavioral\Observer;

interface Observer{
    public  function onJobPosted(JobPost $job);
}
