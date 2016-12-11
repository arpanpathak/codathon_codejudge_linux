/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.util.Arrays;

/**
 *
 * @author tcstcs
 */
public class problem2 {
    static BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
    public static void main(String[]args)throws Exception{
        int t=(int)getInt();
        outer:for(int c=0;c<t;c++){
            int C=(int)getInt();
            int num=(int)getInt();
            int arr[]=geIntArr();
            int a1[]=new int[arr.length];
            System.arraycopy(arr, 0, a1, 0,num);
            Arrays.sort(a1);
            for(int i=0;i<num;i++){
                int a=a1[i];
                int b=C-a;
                int pos=Arrays.binarySearch(a1,b);
                if(pos>=0 && pos!=i){
                    int p1=binarySearch(arr,a)+1;
                    int p2=binarySearch(arr,b)+1;
                    if(p1==p2){
                        p2=binarySearch1(arr,b,p1)+1;
                    }
                    if(p1>p2)System.out.println(p2+" "+p1);
                    else System.out.println(p1+" "+p2);
                    continue outer;
                }
            }
            System.out.println("NA");
        }
        
    }
    static int binarySearch(int arr[],int n){
        for(int i=0;i<arr.length;i++){
            if(arr[i]==n){
                return i;
            }
        }
        return -1;
    }
    static int binarySearch1(int arr[],int n,int pos){
        for(int i=pos;i<arr.length;i++){
            if(arr[i]==n){
                return i;
            }
        }
        return -1;
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
