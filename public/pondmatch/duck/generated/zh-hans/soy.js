// This file was automatically generated from template.soy.
// Please don't edit this file by hand.

/**
 * @fileoverview Templates in namespace Pond.Duck.soy.
 */

goog.provide('Pond.Duck.soy');

goog.require('soy');
goog.require('soydata');
goog.require('BlocklyGames.soy');
goog.require('Pond.soy');


Pond.Duck.soy.messages = function(opt_data, opt_ignored, opt_ijData) {
  return Pond.soy.messages(null, null, opt_ijData) + '<div style="display: none"><span id="Pond_rabbitName">兔子</span><span id="Pond_counterName">计数者</span><span id="Pond_rookName">堡垒</span><span id="Pond_sniperName">狙击手</span><span id="Pond_myName">玩家</span></div>';
};
if (goog.DEBUG) {
  Pond.Duck.soy.messages.soyTemplateName = 'Pond.Duck.soy.messages';
}


Pond.Duck.soy.start = function(opt_data, opt_ignored, opt_ijData) {
  return  Pond.soy.visualization(null, null, opt_ijData) + BlocklyGames.soy.dialog(null, null, opt_ijData);
};
if (goog.DEBUG) {
  Pond.Duck.soy.start.soyTemplateName = 'Pond.Duck.soy.start';
}


Pond.Duck.soy.toolbox = function(opt_data, opt_ignored, opt_ijData) {
  return '<xml id="toolbox" style="display: none;"></xml>';
};
if (goog.DEBUG) {
  Pond.Duck.soy.toolbox.soyTemplateName = 'Pond.Duck.soy.toolbox';
}



