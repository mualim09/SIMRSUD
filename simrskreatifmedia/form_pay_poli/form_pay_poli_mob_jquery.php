
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if ($("#id_ac_" + sField).length > 0) {
    if ($oField.hasClass("select2-hidden-accessible")) {
      if (false == scSetFocusOnField($oField)) {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
    else {
      if (false == scSetFocusOnField($oField)) {
        if (false == scSetFocusOnField($("#id_ac_" + sField))) {
          setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
        }
      }
      else {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["trancode" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nostruk" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["custcode" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sc_field_1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dokter" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_pel" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["jmltagihan" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["jmlbayar" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["jmldk1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["jmldk2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["jmlasr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["jmlkary" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["deposit" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["potongan" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["hrsdibayar" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nopayment" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["terimadari" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["jenispayment" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["instansipenjamin" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["bankdebit" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nokartu" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sc_field_0" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["edc1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["edc2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["poli" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["kasir" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["paiddate" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["detailtindakan" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["detailresep" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["bhp" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["lab" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["radiologi" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["detailadm" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["trancode" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["trancode" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nostruk" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nostruk" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["custcode" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["custcode" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sc_field_1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sc_field_1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dokter" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dokter" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_pel" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_pel" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["jmltagihan" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["jmltagihan" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["jmlbayar" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["jmlbayar" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["jmldk1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["jmldk1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["jmldk2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["jmldk2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["jmlasr" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["jmlasr" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["jmlkary" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["jmlkary" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["deposit" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["deposit" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["potongan" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["potongan" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["hrsdibayar" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["hrsdibayar" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nopayment" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nopayment" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["terimadari" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["terimadari" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["jenispayment" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["jenispayment" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["instansipenjamin" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["instansipenjamin" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bankdebit" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bankdebit" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nokartu" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nokartu" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sc_field_0" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sc_field_0" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["edc1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["edc1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["edc2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["edc2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["poli" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["poli" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["kasir" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["kasir" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["paiddate" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["paiddate" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["detailtindakan" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["detailtindakan" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["detailresep" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["detailresep" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bhp" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bhp" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lab" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lab" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["radiologi" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["radiologi" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["detailadm" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["detailadm" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["instansipenjamin" + iSeqRow]["autocomp"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("nostruk" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("custcode" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("sc_field_1" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("dokter" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("jenispayment" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("bankdebit" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("edc1" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("edc2" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("poli" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("jenispayment" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("jmlasr" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("jmlbayar" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("jmldk1" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("jmldk2" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("jmlkary" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("trancode" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val() || scEventControl_data[sFieldName]["calculated"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_id' + iSeqRow).bind('blur', function() { sc_form_pay_poli_id_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_form_pay_poli_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_trancode' + iSeqRow).bind('blur', function() { sc_form_pay_poli_trancode_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_pay_poli_trancode_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_pay_poli_trancode_onfocus(this, iSeqRow) });
  $('#id_sc_field_nostruk' + iSeqRow).bind('blur', function() { sc_form_pay_poli_nostruk_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_pay_poli_nostruk_onfocus(this, iSeqRow) });
  $('#id_sc_field_custcode' + iSeqRow).bind('blur', function() { sc_form_pay_poli_custcode_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_pay_poli_custcode_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_pay_poli_custcode_onfocus(this, iSeqRow) });
  $('#id_sc_field_dokter' + iSeqRow).bind('blur', function() { sc_form_pay_poli_dokter_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_pay_poli_dokter_onfocus(this, iSeqRow) });
  $('#id_sc_field_jmltagihan' + iSeqRow).bind('blur', function() { sc_form_pay_poli_jmltagihan_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_pay_poli_jmltagihan_onfocus(this, iSeqRow) });
  $('#id_sc_field_jmlbayar' + iSeqRow).bind('blur', function() { sc_form_pay_poli_jmlbayar_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_pay_poli_jmlbayar_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_pay_poli_jmlbayar_onfocus(this, iSeqRow) });
  $('#id_sc_field_deposit' + iSeqRow).bind('blur', function() { sc_form_pay_poli_deposit_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_pay_poli_deposit_onfocus(this, iSeqRow) });
  $('#id_sc_field_potongan' + iSeqRow).bind('blur', function() { sc_form_pay_poli_potongan_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_pay_poli_potongan_onfocus(this, iSeqRow) });
  $('#id_sc_field_hrsdibayar' + iSeqRow).bind('blur', function() { sc_form_pay_poli_hrsdibayar_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_pay_poli_hrsdibayar_onfocus(this, iSeqRow) });
  $('#id_sc_field_terimadari' + iSeqRow).bind('blur', function() { sc_form_pay_poli_terimadari_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_pay_poli_terimadari_onfocus(this, iSeqRow) });
  $('#id_sc_field_jenispayment' + iSeqRow).bind('blur', function() { sc_form_pay_poli_jenispayment_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_pay_poli_jenispayment_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_pay_poli_jenispayment_onfocus(this, iSeqRow) });
  $('#id_sc_field_instansipenjamin' + iSeqRow).bind('blur', function() { sc_form_pay_poli_instansipenjamin_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_pay_poli_instansipenjamin_onfocus(this, iSeqRow) });
  $('#id_sc_field_bankdebit' + iSeqRow).bind('blur', function() { sc_form_pay_poli_bankdebit_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_pay_poli_bankdebit_onfocus(this, iSeqRow) });
  $('#id_sc_field_nokartu' + iSeqRow).bind('blur', function() { sc_form_pay_poli_nokartu_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_pay_poli_nokartu_onfocus(this, iSeqRow) });
  $('#id_sc_field_sc_field_0' + iSeqRow).bind('blur', function() { sc_form_pay_poli_sc_field_0_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_pay_poli_sc_field_0_onfocus(this, iSeqRow) });
  $('#id_sc_field_paiddate' + iSeqRow).bind('blur', function() { sc_form_pay_poli_paiddate_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_pay_poli_paiddate_onfocus(this, iSeqRow) });
  $('#id_sc_field_paiddate_hora' + iSeqRow).bind('blur', function() { sc_form_pay_poli_paiddate_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_pay_poli_paiddate_onfocus(this, iSeqRow) });
  $('#id_sc_field_nopayment' + iSeqRow).bind('blur', function() { sc_form_pay_poli_nopayment_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_pay_poli_nopayment_onfocus(this, iSeqRow) });
  $('#id_sc_field_kasir' + iSeqRow).bind('blur', function() { sc_form_pay_poli_kasir_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_pay_poli_kasir_onfocus(this, iSeqRow) });
  $('#id_sc_field_jmldk1' + iSeqRow).bind('blur', function() { sc_form_pay_poli_jmldk1_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_pay_poli_jmldk1_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_pay_poli_jmldk1_onfocus(this, iSeqRow) });
  $('#id_sc_field_jmldk2' + iSeqRow).bind('blur', function() { sc_form_pay_poli_jmldk2_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_pay_poli_jmldk2_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_pay_poli_jmldk2_onfocus(this, iSeqRow) });
  $('#id_sc_field_jmlasr' + iSeqRow).bind('blur', function() { sc_form_pay_poli_jmlasr_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_pay_poli_jmlasr_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_pay_poli_jmlasr_onfocus(this, iSeqRow) });
  $('#id_sc_field_jmlkary' + iSeqRow).bind('blur', function() { sc_form_pay_poli_jmlkary_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_pay_poli_jmlkary_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_pay_poli_jmlkary_onfocus(this, iSeqRow) });
  $('#id_sc_field_edc1' + iSeqRow).bind('blur', function() { sc_form_pay_poli_edc1_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_pay_poli_edc1_onfocus(this, iSeqRow) });
  $('#id_sc_field_edc2' + iSeqRow).bind('blur', function() { sc_form_pay_poli_edc2_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_pay_poli_edc2_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_pel' + iSeqRow).bind('blur', function() { sc_form_pay_poli_id_pel_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_pay_poli_id_pel_onfocus(this, iSeqRow) });
  $('#id_sc_field_sc_field_1' + iSeqRow).bind('blur', function() { sc_form_pay_poli_sc_field_1_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_pay_poli_sc_field_1_onfocus(this, iSeqRow) });
  $('#id_sc_field_poli' + iSeqRow).bind('blur', function() { sc_form_pay_poli_poli_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_pay_poli_poli_onfocus(this, iSeqRow) });
  $('#id_sc_field_bhp' + iSeqRow).bind('blur', function() { sc_form_pay_poli_bhp_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_pay_poli_bhp_onfocus(this, iSeqRow) });
  $('#id_sc_field_detailadm' + iSeqRow).bind('blur', function() { sc_form_pay_poli_detailadm_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_pay_poli_detailadm_onfocus(this, iSeqRow) });
  $('#id_sc_field_detailresep' + iSeqRow).bind('blur', function() { sc_form_pay_poli_detailresep_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_pay_poli_detailresep_onfocus(this, iSeqRow) });
  $('#id_sc_field_detailtindakan' + iSeqRow).bind('blur', function() { sc_form_pay_poli_detailtindakan_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_pay_poli_detailtindakan_onfocus(this, iSeqRow) });
  $('#id_sc_field_lab' + iSeqRow).bind('blur', function() { sc_form_pay_poli_lab_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_pay_poli_lab_onfocus(this, iSeqRow) });
  $('#id_sc_field_radiologi' + iSeqRow).bind('blur', function() { sc_form_pay_poli_radiologi_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_pay_poli_radiologi_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_pay_poli_id_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_id();
  scCssBlur(oThis);
}

function sc_form_pay_poli_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_trancode_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_trancode();
  scCssBlur(oThis);
}

function sc_form_pay_poli_trancode_onchange(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_event_trancode_onchange();
}

function sc_form_pay_poli_trancode_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_nostruk_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_nostruk();
  scCssBlur(oThis);
}

function sc_form_pay_poli_nostruk_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_custcode_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_custcode();
  scCssBlur(oThis);
}

function sc_form_pay_poli_custcode_onchange(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_refresh_custcode();
}

function sc_form_pay_poli_custcode_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_dokter_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_dokter();
  scCssBlur(oThis);
}

function sc_form_pay_poli_dokter_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_jmltagihan_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_jmltagihan();
  scCssBlur(oThis);
}

function sc_form_pay_poli_jmltagihan_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_jmlbayar_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_jmlbayar();
  scCssBlur(oThis);
}

function sc_form_pay_poli_jmlbayar_onchange(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_event_jmlbayar_onchange();
}

function sc_form_pay_poli_jmlbayar_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_deposit_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_deposit();
  scCssBlur(oThis);
}

function sc_form_pay_poli_deposit_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_potongan_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_potongan();
  scCssBlur(oThis);
}

function sc_form_pay_poli_potongan_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_hrsdibayar_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_hrsdibayar();
  scCssBlur(oThis);
}

function sc_form_pay_poli_hrsdibayar_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_terimadari_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_terimadari();
  scCssBlur(oThis);
}

function sc_form_pay_poli_terimadari_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_jenispayment_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_jenispayment();
  scCssBlur(oThis);
}

function sc_form_pay_poli_jenispayment_onchange(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_event_jenispayment_onchange();
}

function sc_form_pay_poli_jenispayment_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_instansipenjamin_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_instansipenjamin();
  scCssBlur(oThis);
}

function sc_form_pay_poli_instansipenjamin_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_pay_poli_bankdebit_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_bankdebit();
  scCssBlur(oThis);
}

function sc_form_pay_poli_bankdebit_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_nokartu_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_nokartu();
  scCssBlur(oThis);
}

function sc_form_pay_poli_nokartu_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_sc_field_0_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_sc_field_0();
  scCssBlur(oThis);
}

function sc_form_pay_poli_sc_field_0_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_paiddate_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_paiddate();
  scCssBlur(oThis);
}

function sc_form_pay_poli_paiddate_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_paiddate();
  scCssBlur(oThis);
}

function sc_form_pay_poli_paiddate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_paiddate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_nopayment_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_nopayment();
  scCssBlur(oThis);
}

function sc_form_pay_poli_nopayment_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_kasir_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_kasir();
  scCssBlur(oThis);
}

function sc_form_pay_poli_kasir_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_jmldk1_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_jmldk1();
  scCssBlur(oThis);
}

function sc_form_pay_poli_jmldk1_onchange(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_event_jmldk1_onchange();
}

function sc_form_pay_poli_jmldk1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_jmldk2_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_jmldk2();
  scCssBlur(oThis);
}

function sc_form_pay_poli_jmldk2_onchange(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_event_jmldk2_onchange();
}

function sc_form_pay_poli_jmldk2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_jmlasr_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_jmlasr();
  scCssBlur(oThis);
}

function sc_form_pay_poli_jmlasr_onchange(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_event_jmlasr_onchange();
}

function sc_form_pay_poli_jmlasr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_jmlkary_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_jmlkary();
  scCssBlur(oThis);
}

function sc_form_pay_poli_jmlkary_onchange(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_event_jmlkary_onchange();
}

function sc_form_pay_poli_jmlkary_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_edc1_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_edc1();
  scCssBlur(oThis);
}

function sc_form_pay_poli_edc1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_edc2_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_edc2();
  scCssBlur(oThis);
}

function sc_form_pay_poli_edc2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_id_pel_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_id_pel();
  scCssBlur(oThis);
}

function sc_form_pay_poli_id_pel_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_sc_field_1_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_sc_field_1();
  scCssBlur(oThis);
}

function sc_form_pay_poli_sc_field_1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_poli_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_poli();
  scCssBlur(oThis);
}

function sc_form_pay_poli_poli_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_bhp_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_bhp();
  scCssBlur(oThis);
}

function sc_form_pay_poli_bhp_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_detailadm_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_detailadm();
  scCssBlur(oThis);
}

function sc_form_pay_poli_detailadm_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_detailresep_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_detailresep();
  scCssBlur(oThis);
}

function sc_form_pay_poli_detailresep_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_detailtindakan_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_detailtindakan();
  scCssBlur(oThis);
}

function sc_form_pay_poli_detailtindakan_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_lab_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_lab();
  scCssBlur(oThis);
}

function sc_form_pay_poli_lab_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pay_poli_radiologi_onblur(oThis, iSeqRow) {
  do_ajax_form_pay_poli_mob_validate_radiologi();
  scCssBlur(oThis);
}

function sc_form_pay_poli_radiologi_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
	if ("1" == block) {
		displayChange_block_1(status);
	}
	if ("2" == block) {
		displayChange_block_2(status);
	}
	if ("3" == block) {
		displayChange_block_3(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("id", "", status);
	displayChange_field("trancode", "", status);
	displayChange_field("nostruk", "", status);
	displayChange_field("custcode", "", status);
	displayChange_field("sc_field_1", "", status);
	displayChange_field("dokter", "", status);
	displayChange_field("id_pel", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("jmltagihan", "", status);
	displayChange_field("jmlbayar", "", status);
	displayChange_field("jmldk1", "", status);
	displayChange_field("jmldk2", "", status);
	displayChange_field("jmlasr", "", status);
	displayChange_field("jmlkary", "", status);
	displayChange_field("deposit", "", status);
	displayChange_field("potongan", "", status);
	displayChange_field("hrsdibayar", "", status);
	displayChange_field("nopayment", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("terimadari", "", status);
	displayChange_field("jenispayment", "", status);
	displayChange_field("instansipenjamin", "", status);
	displayChange_field("bankdebit", "", status);
	displayChange_field("nokartu", "", status);
	displayChange_field("sc_field_0", "", status);
	displayChange_field("edc1", "", status);
	displayChange_field("edc2", "", status);
	displayChange_field("poli", "", status);
	displayChange_field("kasir", "", status);
	displayChange_field("paiddate", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("detailtindakan", "", status);
	displayChange_field("detailresep", "", status);
	displayChange_field("bhp", "", status);
	displayChange_field("lab", "", status);
	displayChange_field("radiologi", "", status);
	displayChange_field("detailadm", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_id(row, status);
	displayChange_field_trancode(row, status);
	displayChange_field_nostruk(row, status);
	displayChange_field_custcode(row, status);
	displayChange_field_sc_field_1(row, status);
	displayChange_field_dokter(row, status);
	displayChange_field_id_pel(row, status);
	displayChange_field_jmltagihan(row, status);
	displayChange_field_jmlbayar(row, status);
	displayChange_field_jmldk1(row, status);
	displayChange_field_jmldk2(row, status);
	displayChange_field_jmlasr(row, status);
	displayChange_field_jmlkary(row, status);
	displayChange_field_deposit(row, status);
	displayChange_field_potongan(row, status);
	displayChange_field_hrsdibayar(row, status);
	displayChange_field_nopayment(row, status);
	displayChange_field_terimadari(row, status);
	displayChange_field_jenispayment(row, status);
	displayChange_field_instansipenjamin(row, status);
	displayChange_field_bankdebit(row, status);
	displayChange_field_nokartu(row, status);
	displayChange_field_sc_field_0(row, status);
	displayChange_field_edc1(row, status);
	displayChange_field_edc2(row, status);
	displayChange_field_poli(row, status);
	displayChange_field_kasir(row, status);
	displayChange_field_paiddate(row, status);
	displayChange_field_detailtindakan(row, status);
	displayChange_field_detailresep(row, status);
	displayChange_field_bhp(row, status);
	displayChange_field_lab(row, status);
	displayChange_field_radiologi(row, status);
	displayChange_field_detailadm(row, status);
}

function displayChange_field(field, row, status) {
	if ("id" == field) {
		displayChange_field_id(row, status);
	}
	if ("trancode" == field) {
		displayChange_field_trancode(row, status);
	}
	if ("nostruk" == field) {
		displayChange_field_nostruk(row, status);
	}
	if ("custcode" == field) {
		displayChange_field_custcode(row, status);
	}
	if ("sc_field_1" == field) {
		displayChange_field_sc_field_1(row, status);
	}
	if ("dokter" == field) {
		displayChange_field_dokter(row, status);
	}
	if ("id_pel" == field) {
		displayChange_field_id_pel(row, status);
	}
	if ("jmltagihan" == field) {
		displayChange_field_jmltagihan(row, status);
	}
	if ("jmlbayar" == field) {
		displayChange_field_jmlbayar(row, status);
	}
	if ("jmldk1" == field) {
		displayChange_field_jmldk1(row, status);
	}
	if ("jmldk2" == field) {
		displayChange_field_jmldk2(row, status);
	}
	if ("jmlasr" == field) {
		displayChange_field_jmlasr(row, status);
	}
	if ("jmlkary" == field) {
		displayChange_field_jmlkary(row, status);
	}
	if ("deposit" == field) {
		displayChange_field_deposit(row, status);
	}
	if ("potongan" == field) {
		displayChange_field_potongan(row, status);
	}
	if ("hrsdibayar" == field) {
		displayChange_field_hrsdibayar(row, status);
	}
	if ("nopayment" == field) {
		displayChange_field_nopayment(row, status);
	}
	if ("terimadari" == field) {
		displayChange_field_terimadari(row, status);
	}
	if ("jenispayment" == field) {
		displayChange_field_jenispayment(row, status);
	}
	if ("instansipenjamin" == field) {
		displayChange_field_instansipenjamin(row, status);
	}
	if ("bankdebit" == field) {
		displayChange_field_bankdebit(row, status);
	}
	if ("nokartu" == field) {
		displayChange_field_nokartu(row, status);
	}
	if ("sc_field_0" == field) {
		displayChange_field_sc_field_0(row, status);
	}
	if ("edc1" == field) {
		displayChange_field_edc1(row, status);
	}
	if ("edc2" == field) {
		displayChange_field_edc2(row, status);
	}
	if ("poli" == field) {
		displayChange_field_poli(row, status);
	}
	if ("kasir" == field) {
		displayChange_field_kasir(row, status);
	}
	if ("paiddate" == field) {
		displayChange_field_paiddate(row, status);
	}
	if ("detailtindakan" == field) {
		displayChange_field_detailtindakan(row, status);
	}
	if ("detailresep" == field) {
		displayChange_field_detailresep(row, status);
	}
	if ("bhp" == field) {
		displayChange_field_bhp(row, status);
	}
	if ("lab" == field) {
		displayChange_field_lab(row, status);
	}
	if ("radiologi" == field) {
		displayChange_field_radiologi(row, status);
	}
	if ("detailadm" == field) {
		displayChange_field_detailadm(row, status);
	}
}

function displayChange_field_id(row, status) {
}

function displayChange_field_trancode(row, status) {
}

function displayChange_field_nostruk(row, status) {
}

function displayChange_field_custcode(row, status) {
}

function displayChange_field_sc_field_1(row, status) {
}

function displayChange_field_dokter(row, status) {
}

function displayChange_field_id_pel(row, status) {
}

function displayChange_field_jmltagihan(row, status) {
}

function displayChange_field_jmlbayar(row, status) {
}

function displayChange_field_jmldk1(row, status) {
}

function displayChange_field_jmldk2(row, status) {
}

function displayChange_field_jmlasr(row, status) {
}

function displayChange_field_jmlkary(row, status) {
}

function displayChange_field_deposit(row, status) {
}

function displayChange_field_potongan(row, status) {
}

function displayChange_field_hrsdibayar(row, status) {
}

function displayChange_field_nopayment(row, status) {
}

function displayChange_field_terimadari(row, status) {
}

function displayChange_field_jenispayment(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_jenispayment__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_jenispayment" + row).select2("destroy");
		}
		scJQSelect2Add(row, "jenispayment");
	}
}

function displayChange_field_instansipenjamin(row, status) {
}

function displayChange_field_bankdebit(row, status) {
}

function displayChange_field_nokartu(row, status) {
}

function displayChange_field_sc_field_0(row, status) {
}

function displayChange_field_edc1(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_edc1__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_edc1" + row).select2("destroy");
		}
		scJQSelect2Add(row, "edc1");
	}
}

function displayChange_field_edc2(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_edc2__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_edc2" + row).select2("destroy");
		}
		scJQSelect2Add(row, "edc2");
	}
}

function displayChange_field_poli(row, status) {
}

function displayChange_field_kasir(row, status) {
}

function displayChange_field_paiddate(row, status) {
}

function displayChange_field_detailtindakan(row, status) {
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_tbtindakanrawatjalan_mob")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_tbtindakanrawatjalan_mob")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_detailresep(row, status) {
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_tbreseprawatjalan_mob")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_tbreseprawatjalan_mob")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_bhp(row, status) {
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_tbbhprawatjalan_mob")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_tbbhprawatjalan_mob")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_lab(row, status) {
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_tbrujukanlab_mob")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_tbrujukanlab_mob")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_radiologi(row, status) {
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_tbrujukanradiologi_mob")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_tbrujukanradiologi_mob")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_detailadm(row, status) {
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_detailadm_mob")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_detailadm_mob")[0].contentWindow.scRecreateSelect2();
	}
}

function scRecreateSelect2() {
	displayChange_field_jenispayment("all", "on");
	displayChange_field_edc1("all", "on");
	displayChange_field_edc2("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_pay_poli_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(25);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_paiddate" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_paiddate" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['paiddate']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['paiddate']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_pay_poli_mob_validate_paiddate(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['paiddate']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "<?php echo $miniCalendarFA; ?>",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "<?php echo $miniCalendarButton[0]; ?>",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });
  $("#id_sc_field_trandate" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_trandate" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['trandate']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['trandate']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_pay_poli_mob_validate_trandate(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['trandate']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "<?php echo $miniCalendarFA; ?>",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "<?php echo $miniCalendarButton[0]; ?>",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });
} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "jenispayment" == specificField) {
    scJQSelect2Add_jenispayment(seqRow);
  }
  if (null == specificField || "edc1" == specificField) {
    scJQSelect2Add_edc1(seqRow);
  }
  if (null == specificField || "edc2" == specificField) {
    scJQSelect2Add_edc2(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_jenispayment(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_jenispayment_obj" : "#id_sc_field_jenispayment" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_jenispayment_obj',
      dropdownCssClass: 'css_jenispayment_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_edc1(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_edc1_obj" : "#id_sc_field_edc1" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_edc1_obj',
      dropdownCssClass: 'css_edc1_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_edc2(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_edc2_obj" : "#id_sc_field_edc2" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_edc2_obj',
      dropdownCssClass: 'css_edc2_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_jenispayment) { displayChange_field_jenispayment(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_edc1) { displayChange_field_edc1(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_edc2) { displayChange_field_edc2(iLine, "on"); } }, 150);
} // scJQElementsAdd

var scBtnGrpStatus = {};
function scBtnGrpShow(sGroup) {
  if (typeof(scBtnGrpShowMobile) === typeof(function(){})) { return scBtnGrpShowMobile(sGroup); };
  $('#sc_btgp_btn_' + sGroup).addClass('selected');
  var btnPos = $('#sc_btgp_btn_' + sGroup).offset();
  scBtnGrpStatus[sGroup] = 'open';
  $('#sc_btgp_btn_' + sGroup).mouseout(function() {
    scBtnGrpStatus[sGroup] = '';
    setTimeout(function() {
      scBtnGrpHide(sGroup, false);
    }, 1000);
  }).mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  });
  $('#sc_btgp_div_' + sGroup + ' span a').click(function() {
    scBtnGrpStatus[sGroup] = 'out';
    scBtnGrpHide(sGroup, false);
  });
  $('#sc_btgp_div_' + sGroup).css({
    'left': btnPos.left
  })
  .mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  })
  .mouseleave(function() {
    scBtnGrpStatus[sGroup] = 'out';
    setTimeout(function() {
      scBtnGrpHide(sGroup, false);
    }, 1000);
  })
  .show('fast');
}
function scBtnGrpHide(sGroup, bForce) {
  if (bForce || 'over' != scBtnGrpStatus[sGroup]) {
    $('#sc_btgp_div_' + sGroup).hide('fast');
    $('#sc_btgp_btn_' + sGroup).addClass('selected');
  }
}
