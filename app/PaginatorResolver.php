<?php
namespace App;
use Illuminate\Pagination\Paginator;
class PaginatorResolver
{
  static function PageResolver ($page){
    Paginator::currentPageResolver(function() use ($page) { return $page; });
  }
}