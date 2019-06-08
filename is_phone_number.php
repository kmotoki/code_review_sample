/**
 * 引数 $phone_number が電話番号であることをチェックする。
 * ただし、厳密なチェックはせず、'-'を除いた後の桁数と数字だけの文字列であることのみチェックする。
 *
 * @param string $phone_number 電話番号
 * @return bool 引数 $phone_number が電話番号ならば true。
 */
function is_phone_number (string $phone_number): bool
{
	$phone_number = str_replace('-', '', phone_number);

	$length = strlen($phone_number);
	if ($length < 10 || $length > 11) {
		return false;
	}
	
	return is_numeric($phone_number);
}
