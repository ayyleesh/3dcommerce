<?php

function presentPrice($price)
{
  return 'JPY'.number_format($price, 0, ".", ",");
}
