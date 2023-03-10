<?php

class grid_tbdetailok_total
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;

   var $nm_data;

   //----- 
   function __construct($sc_page)
   {
      $this->sc_page = $sc_page;
      $this->nm_data = new nm_data("id");
      if (isset($_SESSION['sc_session'][$this->sc_page]['grid_tbdetailok']['campos_busca']) && !empty($_SESSION['sc_session'][$this->sc_page]['grid_tbdetailok']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbdetailok']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->id = $Busca_temp['id']; 
          $tmp_pos = strpos($this->id, "##@@");
          if ($tmp_pos !== false && !is_array($this->id))
          {
              $this->id = substr($this->id, 0, $tmp_pos);
          }
          $this->trancode = $Busca_temp['trancode']; 
          $tmp_pos = strpos($this->trancode, "##@@");
          if ($tmp_pos !== false && !is_array($this->trancode))
          {
              $this->trancode = substr($this->trancode, 0, $tmp_pos);
          }
          $this->custcode = $Busca_temp['custcode']; 
          $tmp_pos = strpos($this->custcode, "##@@");
          if ($tmp_pos !== false && !is_array($this->custcode))
          {
              $this->custcode = substr($this->custcode, 0, $tmp_pos);
          }
          $this->pa = $Busca_temp['pa']; 
          $tmp_pos = strpos($this->pa, "##@@");
          if ($tmp_pos !== false && !is_array($this->pa))
          {
              $this->pa = substr($this->pa, 0, $tmp_pos);
          }
          $this->cito = $Busca_temp['cito']; 
          $tmp_pos = strpos($this->cito, "##@@");
          if ($tmp_pos !== false && !is_array($this->cito))
          {
              $this->cito = substr($this->cito, 0, $tmp_pos);
          }
          $this->vc = $Busca_temp['vc']; 
          $tmp_pos = strpos($this->vc, "##@@");
          if ($tmp_pos !== false && !is_array($this->vc))
          {
              $this->vc = substr($this->vc, 0, $tmp_pos);
          }
          $this->cultur = $Busca_temp['cultur']; 
          $tmp_pos = strpos($this->cultur, "##@@");
          if ($tmp_pos !== false && !is_array($this->cultur))
          {
              $this->cultur = substr($this->cultur, 0, $tmp_pos);
          }
          $this->asa = $Busca_temp['asa']; 
          $tmp_pos = strpos($this->asa, "##@@");
          if ($tmp_pos !== false && !is_array($this->asa))
          {
              $this->asa = substr($this->asa, 0, $tmp_pos);
          }
          $this->diagpre = $Busca_temp['diagpre']; 
          $tmp_pos = strpos($this->diagpre, "##@@");
          if ($tmp_pos !== false && !is_array($this->diagpre))
          {
              $this->diagpre = substr($this->diagpre, 0, $tmp_pos);
          }
          $this->diagpost = $Busca_temp['diagpost']; 
          $tmp_pos = strpos($this->diagpost, "##@@");
          if ($tmp_pos !== false && !is_array($this->diagpost))
          {
              $this->diagpost = substr($this->diagpost, 0, $tmp_pos);
          }
          $this->trandate = $Busca_temp['trandate']; 
          $tmp_pos = strpos($this->trandate, "##@@");
          if ($tmp_pos !== false && !is_array($this->trandate))
          {
              $this->trandate = substr($this->trandate, 0, $tmp_pos);
          }
          $this->entrydate = $Busca_temp['entrydate']; 
          $tmp_pos = strpos($this->entrydate, "##@@");
          if ($tmp_pos !== false && !is_array($this->entrydate))
          {
              $this->entrydate = substr($this->entrydate, 0, $tmp_pos);
          }
          $this->class = $Busca_temp['class']; 
          $tmp_pos = strpos($this->class, "##@@");
          if ($tmp_pos !== false && !is_array($this->class))
          {
              $this->class = substr($this->class, 0, $tmp_pos);
          }
          $this->inapcode = $Busca_temp['inapcode']; 
          $tmp_pos = strpos($this->inapcode, "##@@");
          if ($tmp_pos !== false && !is_array($this->inapcode))
          {
              $this->inapcode = substr($this->inapcode, 0, $tmp_pos);
          }
          $this->awalobs = $Busca_temp['awalobs']; 
          $tmp_pos = strpos($this->awalobs, "##@@");
          if ($tmp_pos !== false && !is_array($this->awalobs))
          {
              $this->awalobs = substr($this->awalobs, 0, $tmp_pos);
          }
          $this->akhirobs = $Busca_temp['akhirobs']; 
          $tmp_pos = strpos($this->akhirobs, "##@@");
          if ($tmp_pos !== false && !is_array($this->akhirobs))
          {
              $this->akhirobs = substr($this->akhirobs, 0, $tmp_pos);
          }
      } 
   }

   //---- 
   function quebra_geral_sc_free_total($res_limit=false)
   {
      global $nada, $nm_lang , $custcode;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbdetailok']['contr_total_geral'] == "OK") 
      { 
          return; 
      } 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbdetailok']['tot_geral'] = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "select count(*) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbdetailok']['where_pesq']; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbdetailok']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbdetailok']['where_pesq']; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbdetailok']['tot_geral'][0] = "" . $this->Ini->Nm_lang['lang_msgs_totl'] . ""; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbdetailok']['tot_geral'][1] = $rt->fields[0] ; 
      $rt->Close(); 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbdetailok']['contr_total_geral'] = "OK";
   } 

   function nm_conv_data_db($dt_in, $form_in, $form_out)
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT")
       {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT")
       {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       nm_conv_form_data($dt_out, $form_in, $form_out);
       return $dt_out;
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";
      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont2 >= $tam_campo)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
}

?>
