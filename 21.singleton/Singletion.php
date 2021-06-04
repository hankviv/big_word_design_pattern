<?php

class Singleton
{
    //保存实例化对象
    private static $instance;
    //饿汉模式
    //private static $instance = new Singleton();

    //不运行在外部被实例化
    private function __construct(){}

    //静态的可以支持不实例化就可以调用
    /*
     * 多线程场景下 会有可能并发场景 创建多个实例。避免方法有：
     * 1.加锁。判断如果实例不存在的时候加锁，其他进程等待，等到第一个线程初始化完成释放锁以后，其他线程进去后再判断是否存在（第一个线程已经创建了实例）。存在直接返回。
     * 2.饿汉模式  声明变量的时候就初始化了 private static $instance = new Singleton(); php静态变量值必须是一个定值，不能类属性。
     */
    public static function getInstance()
    {
        //判断是否初始化
        if (!self::$instance instanceof Singleton) {
             self::$instance = new Singleton();
        }
        return self::$instance;
    }

    /*加锁模式
    public static function getInstance()
    {
        //判断是否初始化
        if (!self::$instance instanceof Singleton) {
                //加锁 进入临界区
                lock();
                 //二次判断
                if(!self::$instance instanceof Singleton){
                    self::$instance = new Singleton();
                }
                unlock();
        }
        return self::$instance;
    }
    */

}


