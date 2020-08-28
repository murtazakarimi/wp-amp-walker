
// Amp Navigations

.sub-menu a {
  font-size: 16px;
  padding-left: 30px;
}

.nested-accordion {
  background-color: #000000;
  border: none;
}


.menu-header-menu-container ul li {
    border-bottom: .1px solid #363535;
	}


amp-accordion section h4::after {
  content: "▼";
  padding: 12px 12px;
  position: absolute;
  right: 10px;
  top: 0;
  z-index: 1;
  text-align: center;
  width: 10%;
  height: 60%;
  pointer-events: none;
	border-left: .1px solid #363535;
}

  amp-accordion section[expanded] h4::after {
    content: "▲";
    padding: 12px 12px;
    position: absolute;
    right: 0px;
    top: 0;
    z-index: 1;
    text-align: center;
    width: 10%;
    height: 100%;
    pointer-events: none;
		border-left: .1px solid #363535;
}

amp-accordion section:not([expanded]) h4::after {
  content: "▼";
  padding: 12px 12px;
  position: absolute;
  right: 0px;
  top: 0;
  z-index: 1;
  text-align: center;
  width: 10%;
  height: 100%;
  pointer-events: none;
	border-left: .1px solid #363535;
}
