/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


import java.io.BufferedReader;
import java.io.InputStreamReader;



/**
 *
 * @author tcstcs
 */
public class problem1 {
    static BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
    public static void main(String[]args)throws Exception{
        int t=(int)getInt();
        for(int c=0;c<t;c++){
            String s=br.readLine();
            int pos=s.indexOf('$');
            int len=s.length();
            String ns="";
            for(int i=pos+1;i<len;i++){
                char ch=s.charAt(i);
                if(ch==' '){
                    continue;
                }
                else if(ch-'0'>=0 && ch-'0'<=9){
                    ns+=ch;
                }
                else break;
            }
            System.out.println("$"+Integer.parseInt(ns));
        }
        
    }
 
    static long getInt()throws Exception{
        long t=Long.parseLong(br.readLine());
        return  t;
    }
    static int [] geIntArr()throws Exception{
        String s[]=br.readLine().split(" ");
        int arr[]=new int[s.length];
        for(int i=0;i<s.length;i++){
            arr[i]=Integer.parseInt(s[i]);
        }
        return arr;
    }
     static int [] getIntArr()throws Exception{
        String s[]=br.readLine().split(" ");
        int arr[]=new int[s.length];
        for(int i=0;i<s.length;i++){
            arr[i]=Integer.parseInt(s[i]);
        }
        return arr;
    }
     static long [] getLongArr()throws Exception{
        String s[]=br.readLine().split(" ");
        long arr[]=new long[s.length];
        for(int i=0;i<s.length;i++){
            arr[i]=Long.parseLong(br.readLine());
        }
        return arr;
    }
}


