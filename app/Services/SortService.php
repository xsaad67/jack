<?php
namespace App\Services;

/**
 * Sort class used to provide a-z sorts
 */
class SortService
{
	
	public static function azlisting($table = 'authors', $totalRecord=15){
		$query = \DB::select("select SUBSTRING(name, 1, 1) as alpha, name from 
				( select SUBSTRING(name, 1, 1) as alpha, name, 
				(@rn:=if(@prev = SUBSTRING(name, 1, 1), @rn +1, 1)) as rownumb,
				 @prev:= SUBSTRING(name, 1, 1) from 
				 ( select SUBSTRING(name, 1, 1) as alpha, name from ".$table." order by alpha, name ) as sortedlist 
				 JOIN 
				 (select @prev:=NULL, @rn :=0) as vars ) as groupedlist 
				 where rownumb<=".$totalRecord." 
				 order by 'alpha', 'name'");

		return collect($query);
	}

	public static function authorsListing($totalRecords=15){
		return self::azlisting($table="authors",$totalRecords=15);
	}

	public static function tagsListing($totalRecords=15){
		return collect(self::azlisting($table="tags",$totalRecords=15));
	}

}

?>