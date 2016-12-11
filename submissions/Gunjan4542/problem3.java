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
public class problem3 {
    static BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
    public static void main(String[]args)throws Exception{
        int t=(int)getInt();
        for(int c=0;c<t;c++){
            int arr[]=getIntArr();
            int ld[]=new int[6];
            for(int i=0;i<=5;i++){
                ld[i]=(int)Math.pow(arr[0],i)%10;
            }
            System.out.println(last(ld,arr[1]));
        }
    }
    static int last(int ld[],int num){
        if(num/5==0){
            return ld[num];
        }
        else{
            return last(ld,num/5+num%5);
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
