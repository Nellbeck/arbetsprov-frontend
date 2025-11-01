<?php

/**
 * Base model/service class
 */
class WGR_BaseModel
{
	/**
	 * Mockup for database fetchAll
	 * @param string $sql
	 * @param array $params
	 * @param int $fetchMode
	 * @return array
	 */
	public function dbFetchAllPrepared($sql, $params, $fetchMode)
	{
		return json_decode(json_encode(array(
			array('id' => 1, 'name' => 'Nyheter', 'url' => '#'),
			array('id' => 2, 'name' => 'Lackryl', 'url' => '#'),
			array('id' => 3, 'name' => 'Lacqua', 'url' => '#'),
			array('id' => 4, 'name' => 'Lachrome', 'url' => '#'),
			array('id' => 5, 'name' => 'Nagelolja', 'url' => '#'),
			array('id' => 6, 'name' => 'Tillbehör', 'url' => '#'),
			array('id' => 7, 'name' => 'Varumärken', 'url' => '#'),
			array('id' => 8, 'name' => 'Om Oss', 'url' => '#'),
			array('id' => 9, 'name' => 'Pressbilder', 'url' => '#'),
			array('id' => 10, 'name' => 'Tutorials', 'url' => '#'),
		)));
	}

	/**
	 * Mockup for database fetchAll
	 * @param string $sql
	 * @param array $params
	 * @param int $fetchMode
	 * @return array
	 */
	public function dbFetchAllPrepared2($sql, $params, $fetchMode)
	{
		return json_decode(json_encode(array(
			array('id' => 1, 'name' => 'Produkt1', 'url' => '#', 'imageFileName' => 'acqua1.png', 'price' => '100', 'color' => 'genomskinlig'),
			array('id' => 2, 'name' => 'Produkt2', 'url' => '#', 'imageFileName' => 'acqua2.png', 'price' => '100', 'color' => 'röd'),
			array('id' => 3, 'name' => 'Produkt3', 'url' => '#', 'imageFileName' => 'acqua2.png', 'price' => '100', 'color' => 'röd'),
			array('id' => 4, 'name' => 'Produkt4', 'url' => '#', 'imageFileName' => 'acqua1.png', 'price' => '100', 'color' => 'genomskinlig'),
			array('id' => 1, 'name' => 'Produkt5', 'url' => '#', 'imageFileName' => 'acqua3.png', 'price' => '100', 'color' => 'rosa'),
			array('id' => 2, 'name' => 'Produkt6', 'url' => '#', 'imageFileName' => 'acqua2.png', 'price' => '100', 'color' => 'röd'),
			array('id' => 3, 'name' => 'Produkt7', 'url' => '#', 'imageFileName' => 'acqua1.png', 'price' => '100', 'color' => 'genomskinlig'),
			array('id' => 4, 'name' => 'Produkt8', 'url' => '#', 'imageFileName' => 'acqua3.png', 'price' => '100', 'color' => 'rosa'),
		)));
	}
}
