<?php

namespace DesignPatterns\Behavioural\Observer;

interface Observer{
    public  function onJobPosted(JobPost $job);
}
