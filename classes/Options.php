<?php

use Bitrix\Iblock\Elements\ElementOptionsTable;
use Bitrix\Main\Text\HtmlConverter;

class Options {
	
	private static $iblockElement;

	public function init()
	{
		\Bitrix\Main\Loader::includeModule('iblock');

		self::$iblockElement = ElementOptionsTable::query()
			->setSelect([
				'ADDRESS_VALUE' => 'ADDRESS.VALUE',
				'COORDS_VALUE'=> 'YMAP.VALUE',
				'EMAIL_VALUE' => 'EMAIL.VALUE',
				'TIME_MONDAY_VALUE' => 'TIME_MONDAY.VALUE',
				'TIME_SATURNDAY_VALUE' => 'TIME_SATURNDAY.VALUE',
				'SOCIAL_VK_VALUE' => 'SOCIAL_VK.VALUE',
				'SOCIAL_INST_VALUE' => 'SOCIAL_INST.VALUE',
				'SOCIAL_FACEBOOK_VALUE' => 'SOCIAL_FACEBOOK.VALUE',
			])
			->where('ACTIVE', true)
			->setLimit(1)
			->exec()
			->fetch(new HtmlConverter);

		/**
		 * Получаем self::$iblockElement['PHONES_VALUE'] и
		 * self::$iblockElement['PHONE_VALUE']
		 */
		{
			self::$iblockElement['PHONES_VALUE'] = [];
			$r = ElementOptionsTable::query()
				->setSelect([
					'VAL' => 'PHONES.VALUE'
				])
				->where('ACTIVE', true)
				->exec();
			while ($item = $r->fetch(new HtmlConverter)){
				self::$iblockElement['PHONES_VALUE'][] = [
					'VALUE' => $item['VAL'],
					'DIGITS' => preg_replace(
						'~[^0-9]~',
						'',
						$item['VAL']
					)
				];
			}

			self::$iblockElement['PHONE_VALUE'] =
				self::$iblockElement['PHONES_VALUE'][0]['VALUE'] ?? '';

			self::$iblockElement['PHONES_VALUE'][0]['VALUE'] =
				'+7 3812 ' . self::$iblockElement['PHONES_VALUE'][0]['VALUE'];
			self::$iblockElement['PHONES_VALUE'][0]['DIGITS'] =
				'73812' . self::$iblockElement['PHONES_VALUE'][0]['DIGITS'];
		}
	}

	public function get(string $key)
	{
		$alias = "{$key}_VALUE";

		if (array_key_exists($alias, self::$iblockElement)){
			return self::$iblockElement[$alias];
		} else {
			throw new \Exception("Unknown option '{$key}'");
		}
	}

	public function getPhoneDigits() : string
	{
		return '73812'. preg_replace('~[^0-9]~', '', self::$iblockElement['PHONE_VALUE']);
	}
}

Options::init();
