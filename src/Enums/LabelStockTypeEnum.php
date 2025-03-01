<?php

namespace SmartDato\FedexRestPhpSdk\Enums;

enum LabelStockTypeEnum: string
{
    case PAPER_4X6 = 'PAPER_4X6';
    case STOCK_4X675 = 'STOCK_4X675';
    case PAPER_4X675 = 'PAPER_4X675';
    case PAPER_4X8 = 'PAPER_4X8';
    case PAPER_4X9 = 'PAPER_4X9';
    case PAPER_7X475 = 'PAPER_7X475';
    case PAPER_85X11_BOTTOM_HALF_LABEL = 'PAPER_85X11_BOTTOM_HALF_LABEL';
    case PAPER_85X11_TOP_HALF_LABEL = 'PAPER_85X11_TOP_HALF_LABEL';
    case PAPER_LETTER = 'PAPER_LETTER';
    case STOCK_4X675_LEADING_DOC_TAB = 'STOCK_4X675_LEADING_DOC_TAB';
    case STOCK_4X8 = 'STOCK_4X8';
    case STOCK_4X9_LEADING_DOC_TAB = 'STOCK_4X9_LEADING_DOC_TAB';
    case STOCK_4X6 = 'STOCK_4X6';
    case STOCK_4X675_TRAILING_DOC_TAB = 'STOCK_4X675_TRAILING_DOC_TAB';
    case STOCK_4X9_TRAILING_DOC_TAB = 'STOCK_4X9_TRAILING_DOC_TAB';
    case STOCK_4X9 = 'STOCK_4X9';
    case STOCK_4X85_TRAILING_DOC_TAB = 'STOCK_4X85_TRAILING_DOC_TAB';
    case STOCK_4X105_TRAILING_DOC_TAB = 'STOCK_4X105_TRAILING_DOC_TAB';
}
