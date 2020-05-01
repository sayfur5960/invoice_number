/*
 * Generate Invoice Or Money Receipt No
 *
 * 2019 = M-019-0001
 * 2019 = M-019-0002
 * 2019 = M-019-0003
 *
 * 2020 = M-020-0001
 * 2020 = M-020-0002
 * 2020 = M-020-0003
 *
 * 2021 = M-021-0001
 * 2021 = M-021-0002
 * 2021 = M-021-0003
 * */
$record = ModelName::orderBy('created_at', 'desc')->first();
if (!is_null($record)){
    $sliced_number = explode('-', $record->invoice_no);
    if ($sliced_number[1] == substr(date('Y'), -3)){
        $invoice_no='M-'.substr(date('Y'), -3).'-'.str_pad($sliced_number[2] + 1, 4, "0", STR_PAD_LEFT);
    }
    else{
        $invoice_no='M-'.substr(date('Y'), -3).'-0001';
    }
}
else{
    $invoice_no='M-'.substr(date('Y'), -3).'-0001';
}
