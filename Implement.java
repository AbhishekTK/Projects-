import java.rmi.*;
import java.rmi.server.*;
import java.util.*;
public class Implement extends UnicastRemoteObject implements Inter
{
	private static int items[]={20,40,60,10,100,200};
	private static int price[]={20,60,85,25,15,50};
	
	public Implement() throws RemoteException
	{
	}
	public String purchase(int choice,int quant[]) throws RemoteException
	{
		int flag,m;
		int y[]=new int [10];
		flag=choice; y=quant;
		for(m=0;m<items.length;m++)
		{
			if(m==flag && items[m]>=y[m]){
				items[m]-=y[m];
				break;
			}
		}
		if(m==items.length)
			return "Not enough items";
		return "";
	}
	public int[] show() throws RemoteException
	{
		return items;
	}
	public String cancelitems(int c1,int n1[],int qty1[]) throws RemoteException
	{
		int flag1,m;
		int can[]=new int [10];
		int quant[]=new int [10];
		flag1=c1;can=n1;quant=qty1;
		for(m=0;m<items.length;m++)
		{
			if(m==flag1 && quant[m]!=0 && can[m]<=quant[m]){
				items[m]+=can[m];			
				break;
			}
		}
		if(m==items.length)
			return "You have not buyed that item";
		return "";
	}
	public String[] orderDetails() throws RemoteException
	{
		String shop[]= new String[] {"Milk","Eggs","Apples","Cookies","Cakes","Biscuits"};
		return shop;
	}
	public int[] getPrice() throws RemoteException
	{
		return price;
	}
}
