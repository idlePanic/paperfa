<?php

namespace App;


class Card
{
    public $items=null;
    public $totalQty=0;
    public $totalPrice=0;
    public $art_ids=null;

    public function __construct($oldCard)
    {
        if ($oldCard){
            $this->items=$oldCard->items;
            $this->totalQty=$oldCard->totalQty;
            $this->totalPrice=$oldCard->totalPrice;
            $this->art_ids=$oldCard->art_ids;
        }
    }

    public function add($item,$id)
    {
        $storedItem=['qty'=>0,'price'=>$item->price,'item'=>$item];
        if ($this->items){
            if (array_key_exists($id,$this->items)){
                return back();
                //"<script> alert(hjjhg);</script>";
                //$storedItem = $this->items[$id];
            }
        }
        //$storedItem['qty']++;
        //$storedItem['price']= $item->price * $storedItem['qty'];

        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
        $this->art_ids[$this->totalQty]=$id;
        $this->art_ids = array_values($this->art_ids);

    }

    public function removeItem($id)
    {
       // $this->totalQty-= $this->items[$id]['qty'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['price'];
        //$this->counter--;
        $key = array_search($id , $this->art_ids);
        unset($this->art_ids[$key]);
        $this->art_ids = array_values($this->art_ids);
        unset($this->items[$id]);
    }
}
