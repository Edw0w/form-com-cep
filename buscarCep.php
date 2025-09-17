function get_endereco($cep)
{
    //formatar CEP 
    $cep = preg_replace("/[0-9]/", "", $cep);
    $url = "http:viacep.com.br/ws/$cep/xml/";
    $xml = simplexml_load_file($url);
    return $xml;
}
$endereco = get_endereco($_POST["txtCEP"]);